<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Page background */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Light grey background */
        }

        /* Main container */
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: white; /* White box */
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow effect */
            border-radius: 8px;
        }

        /* Heading styles */
        h1, h2 {
            color: #28a745; /* Green heading */
            font-size: 2em;
        }

        /* Paragraph styles */
        p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
            margin-bottom: 20px;
        }

        /* Content box */
        .content {
            text-align: justify;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>



    <!-- Main Content Container -->
    <div class="container">
        <h1>About Our Platform</h1>
        <div class="content">
            <p>Welcome to our blog creation platform, a space designed to empower individuals to share their thoughts, experiences, and expertise with the world. Whether you're an aspiring writer, a seasoned blogger, or someone who wants to build an online presence, we provide all the tools you need to bring your ideas to life.</p>

            <p>With our intuitive and easy-to-use interface, anyone can start their own blog in just a few steps. You don’t need to be tech-savvy to get started. Our platform simplifies the process so you can focus on what truly matters—creating engaging content and connecting with your audience.</p>

            <h2>Why Choose Us?</h2>
            <p>We believe that everyone has a story to tell. That’s why our platform is designed to be accessible and user-friendly, offering customizable templates, powerful features, and reliable hosting to make sure your blog runs smoothly. Whether you want to write about your passions, hobbies, or professional knowledge, we’ve got you covered.</p>

            <h2>Start Your Blogging Journey</h2>
            <p>Creating your own blog has never been easier! Once you sign up, you’ll have access to a wide range of design options, content management tools, and a supportive community of bloggers who are here to inspire and help you along the way.</p>

            <p>Join our platform today and start sharing your unique voice with the world. Your blog, your rules—create something extraordinary!</p>

            <h2>Get in Touch</h2>
            <p>Have questions? Need assistance? Our support team is always here to help. Feel free to reach out, and we’ll make sure your blogging experience is as smooth and enjoyable as possible.</p>
        </div>
    </div>
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
</html>
