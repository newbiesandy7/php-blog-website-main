<?php
session_start();
require_once 'C:\xampp\htdocs\blogphp\php-blog-website-main\db_conn.php';
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	 $logged = true;
	 $user_id = $_SESSION['user_id'];
    }
  $notFound = 0;

$user_id = $_SESSION['user_id'];
$username = htmlspecialchars($_SESSION['username']);

$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$user_posts = [];
try {
    $stmt = $conn->prepare("SELECT * FROM post WHERE user_id = ? ORDER BY created_at DESC");
    $stmt->execute([$user_id]);
    $user_posts = $stmt->fetchAll();
} catch (PDOException $e) {
    $message = "Error fetching your posts: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard - <?php echo $username; ?></title>

    <style>
        /* Color Palette */
        :root {
            --primary-color: #6D9773;      /* Muted Green */
            --dark-accent: #0C3B2E;        /* Dark Forest Green */
            --button-color: #BB8A52;       /* Earthy Brown */
            --highlight-color: #FFBA00;    /* Vibrant Yellow */
            --text-color: #333;
            --background-light: #f8f8f8;
            --container-bg: #fff;
            --border-color: #e0e0e0;
        }
.coverimg{
    flex-shrink: 0; /* Prevent image from shrinking */
    width: 200px; /* Fixed width for the image container */
    height: 150px; /* Fixed height for the image container */
    background-color: #e0e0e0; /* Placeholder background */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    overflow: hidden;
}
.coverimg img{
    width: 100%;
    height: 100%;
}
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: var(--background-light);
            color: var(--text-color);
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background-color: var(--container-bg);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: var(--dark-accent);
            margin-bottom: 30px;
            font-size: 2.2em;
        }
        .welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }
        .welcome-section p {
            font-size: 1.1em;
            color: #555;
        }
        .nav-links {
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 20px;
        }
        .nav-links a {
            display: inline-block;
            padding: 12px 22px;
            margin: 0 10px;
            background-color: var(--button-color); /* Nav links use earthy brown */
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .nav-links a:hover {
            background-color: #A37546; /* Darker brown on hover */
            transform: translateY(-2px);
        }
        .post-list h3 {
            margin-bottom: 25px;
            color: var(--dark-accent);
            border-bottom: 2px solid var(--primary-color); /* Green underline */
            padding-bottom: 10px;
            font-size: 1.8em;
        }
        .post-item {
            background-color: #F8FCF8; /* Very light green background for posts */
            border: 1px solid #DCEEDA; /* Lighter green border */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .post-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .post-item h4 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.5em;
        }
        .post-item h4 a {
            text-decoration: none;
            color: var(--highlight-color); /* Post titles use vibrant yellow */
            transition: color 0.3s ease;
        }
        .post-item h4 a:hover {
            color: #E6A700; /* Darker yellow on hover */
            text-decoration: underline;
        }
        .post-item p {
            font-size: 1em;
            color: #555;
            line-height: 1.6;
        }
        .post-item small {
            display: block;
            text-align: right;
            color: #888;
            margin-top: 15px;
            font-size: 0.85em;
        }
        .no-posts {
            text-align: center;
            color: #777;
            padding: 30px;
            border: 2px dashed var(--primary-color);
            border-radius: 8px;
            font-style: italic;
        }
        .message {
            margin-bottom: 25px;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }
        .message.success {
            background-color: #E6F3E6;
            color: var(--dark-accent);
            border: 1px solid var(--primary-color);
        }
        .message.error {
            background-color: #FFEFEF;
            color: #D8000C;
            border: 1px solid #FFDCDC;
        }
        .post-actions {
            text-align: right;
            margin-top: 15px;
            font-size: 0.9em;
        }
        .post-actions a {
            color: var(--primary-color);
            text-decoration: none;
            margin-left: 15px;
            transition: color 0.3s ease;
        }
        .post-actions a:hover {
            color: var(--dark-accent);
            text-decoration: underline;
        }
        .post-actions a.delete-link {
            color: #dc3545; /* Standard red for delete */
        }
        .post-actions a.delete-link:hover {
            color: #b02a37;
        }
    </style>
     <link rel="stylesheet" href="css/richtext.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.richtext.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include'C:\xampp\htdocs\blogphp\php-blog-website-main\inc\NavBar.php';
    ?>
    <div class="container">
        <h2>Welcome to Your Dashboard, <?php echo $username; ?>!</h2>

        <?php if (!empty($message)): ?>
            <div class="message <?php echo (strpos($message, 'Error') === false) ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <div class="nav-links">
            <a href="create_post.php">Create New Post</a>
            <a href="index.php">View All Posts</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="post-list">
            <h3>Your Blog Posts:</h3>
            <?php if (empty($user_posts)): ?>
                <p class="no-posts">You haven't published any posts yet. Time to create one!</p>
            <?php else: ?>
                <?php foreach ($user_posts as $post): ?>
                    <div class="post-item">
                        <h4><a href="C:\xampp\htdocs\blogphp\php-blog-website-main\view_post.php?id=<?php echo $post['user_id']; ?>"><?php echo htmlspecialchars($post['post_title']); ?></a></h4>
                        <p><?php
                            $snippet = htmlspecialchars($post['post_text']);
                            if (strlen($snippet) > 200) {
                                $snippet = substr($snippet, 0, 200) . '...';
                            }
                            echo nl2br($snippet);
                        ?></p>
                        <div class="coverimg">
                            <img src="upload/blog/<?=$post['cover_url']?>" alt="img">
                        </div>
                        <small>Posted on: <?php echo date('F j, Y, g:i a', strtotime($post['created_at'])); ?></small>
                        <div class="post-actions">
                            <a href="edit.php?id=<?php echo $post['user_id']; ?>">Edit</a> |
                            <a href="delete.php?id=<?php echo $post['user_id']; ?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php
    include'C:\xampp\htdocs\blogphp\php-blog-website-main\inc\footer.php';
    ?>
</body>
</html>