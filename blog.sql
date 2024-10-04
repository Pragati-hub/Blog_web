-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(17, 28, 5, 'The Art of Finding Balance in a Busy World', '1728052097_img-5.jpg', '&lt;p&gt;In today&#039;s fast-paced world, achieving balance feels like an elusive goal. Between work, family, social obligations, and personal aspirations, it can seem impossible to find time for everything. But finding balance doesn&rsquo;t mean having to do everything perfectly. It&rsquo;s about creating harmony between the demands of daily life and the need for self-care.&lt;/p&gt;&lt;p&gt;One of the first steps in achieving balance is learning to set boundaries. Often, we say &quot;yes&quot; to more than we can handle, fearing that saying &quot;no&quot; might disappoint others or cause us to miss out. However, constantly stretching ourselves too thin leaves us with little energy to focus on our well-being. Setting clear limits and prioritizing our time can help us feel more in control.&lt;/p&gt;&lt;p&gt;Time management is another key aspect. It&rsquo;s not just about planning your day but also about making space for rest and reflection. Small moments, like a quiet morning coffee or a few minutes of meditation, can have a significant impact on mental clarity. Scheduling regular breaks helps prevent burnout and allows us to approach tasks with renewed focus and energy.&lt;/p&gt;&lt;p&gt;Equally important is maintaining a connection to the things that bring us joy. Hobbies, spending time in nature, or nurturing relationships with loved ones all play a crucial role in feeling balanced. These moments of joy serve as a reminder of why we work hard in the first place, bringing a sense of purpose and fulfillment to our lives.&lt;/p&gt;&lt;p&gt;Physical health also ties into balance. Incorporating regular exercise, eating well, and getting adequate sleep can boost mood and energy levels, making it easier to juggle life&#039;s responsibilities. It&rsquo;s often said that a healthy body supports a healthy mind, and this becomes evident when we feel physically drained or fatigued.&lt;/p&gt;&lt;p&gt;Lastly, flexibility is key. Life will always present unexpected challenges, and the ability to adapt is essential. Accepting that not everything will go according to plan helps reduce stress and allows us to recover more easily from setbacks. Balance is not a static state but a fluid process of adjusting to life&rsquo;s ebbs and flows.&lt;/p&gt;&lt;p&gt;In a world that constantly demands our attention, finding balance can feel like an ongoing challenge. But by setting boundaries, managing time wisely, nurturing joy, and taking care of our health, we can create a sense of equilibrium that allows us to thrive. Balance is a journey, not a destination&mdash;one that evolves with every season of life&lt;/p&gt;', 1, '2024-10-04 19:58:17'),
(18, 28, 9, 'The Last Climb: A Journey Beyond the Summit', '1728052236_img-3.jpg', '&lt;p&gt;The peak loomed above Ethan, a silent giant casting its shadow over the valley. He had spent months preparing for this moment, but now, standing at the base of the mountain, doubt began to creep in. The path ahead was steep, treacherous, and unyielding. For a moment, he considered turning back. But then he remembered why he was here.&lt;/p&gt;&lt;p&gt;This climb wasn&rsquo;t just about reaching the summit. It was about proving to himself that he could rise above the limitations he had placed on his own life. Every challenge he had faced, every setback, had led him to this point. And now, the only thing standing in his way was fear&mdash;the fear of failure, of not being good enough.&lt;/p&gt;&lt;p&gt;As Ethan began his ascent, each step became heavier, the air thinner, and the path more dangerous. His legs burned, his heart raced, and the biting cold gnawed at his skin. At times, he slipped, falling to his knees, but he always got back up. He was determined to keep moving, no matter how slow the progress.&lt;/p&gt;&lt;p&gt;At halfway up the mountain, a fierce storm rolled in, blinding him with snow and ice. Ethan could barely see the path ahead, and for a moment, he panicked. But then, a voice whispered in the back of his mind: &lt;i&gt;&quot;Just take one more step.&quot;&lt;/i&gt; It was a mantra he had learned in his darkest moments, a reminder that progress, no matter how small, was still progress.&lt;/p&gt;&lt;p&gt;Hours passed, and the storm finally began to clear. As Ethan looked up, the summit came into view. His body was exhausted, but his spirit was alive, fueled by the knowledge that he had come so far. With renewed determination, he pushed forward, step by step, until at last, he stood at the top.&lt;/p&gt;&lt;p&gt;The view was breathtaking, but more than that, Ethan felt something inside him shift. This wasn&rsquo;t just about conquering a mountain; it was about conquering the doubts and fears that had held him back for so long. The climb had changed him, and he knew that from this moment on, nothing was impossible.&lt;/p&gt;&lt;p&gt;As he gazed at the world below, Ethan realized something profound: the summit was not the end of the journey&mdash;it was only the beginning.&lt;/p&gt;', 1, '2024-10-04 20:00:36'),
(19, 28, 7, 'When the Storm Clears: Finding Strength in Chaos', '1728052296_img-4.jpg', '&lt;p&gt;Life has a way of throwing storms at us when we least expect them. Just when things seem to be going smoothly, the winds change, and suddenly, everything is in disarray. It could be the loss of a job, a relationship falling apart, or an unexpected obstacle that derails our plans. In these moments, it&rsquo;s easy to feel overwhelmed, lost in the chaos of the storm.&lt;/p&gt;&lt;p&gt;But here&rsquo;s the truth: storms are a part of life. They come and go, sometimes with little warning, but they always pass. And when they do, they leave behind lessons, strength, and growth.&lt;/p&gt;&lt;p&gt;When you&rsquo;re in the middle of a storm, it&rsquo;s hard to see past the swirling winds and rain. Everything feels out of control, and it&rsquo;s tempting to give up. But the key to weathering life&rsquo;s storms isn&rsquo;t about trying to control the chaos&mdash;it&rsquo;s about finding your anchor. That anchor could be your family, your faith, your passions, or even just your belief in yourself.&lt;/p&gt;&lt;p&gt;During a storm, it&rsquo;s important to remember that the sun will shine again. Just like nature, our lives go through seasons, and the dark clouds are only temporary. In fact, it&rsquo;s often in the toughest times that we discover our true resilience. The challenges we face don&rsquo;t break us; they shape us into stronger, more capable versions of ourselves.&lt;/p&gt;&lt;p&gt;Think of the storm as a test&mdash;a test of your patience, your perseverance, and your ability to adapt. It&rsquo;s easy to be strong when everything is going right, but true strength is found when things fall apart, and you still find the courage to keep going.&lt;/p&gt;&lt;p&gt;When the storm clears, you&rsquo;ll realize that you&rsquo;re not the same person you were before. You&rsquo;ll be stronger, wiser, and more resilient. You&rsquo;ll have a new perspective on life and a deeper appreciation for the calm after the storm.&lt;/p&gt;&lt;p&gt;So, the next time life throws a storm your way, don&rsquo;t be afraid. Embrace it, knowing that when the skies clear, you&rsquo;ll be better for having faced it. And remember&mdash;storms don&rsquo;t last forever, but the strength you gain from them does.&lt;/p&gt;', 1, '2024-10-04 20:01:36'),
(20, 28, 5, 'The Quiet Strength of Patience: Waiting for Life to Unfold', '1728052396_img-2.jpg', '&lt;p&gt;In a world that values speed and instant gratification, patience often feels like an outdated virtue. We live in a time where everything is at our fingertips&mdash;food, information, entertainment&mdash;yet some of life&rsquo;s most important moments still require time to unfold. Patience, though difficult to practice, is one of the most powerful tools for personal growth and success.&lt;/p&gt;&lt;p&gt;Consider a seed planted in the ground. You water it, give it sunlight, and tend to it daily, but the results aren&rsquo;t immediate. It takes days, weeks, sometimes months for the seed to break through the soil. And even longer for it to grow into a strong, healthy plant. If you dig it up too soon, you&rsquo;ll destroy its potential. Life is much the same way.&lt;/p&gt;&lt;p&gt;Patience is not passive; it&rsquo;s a quiet form of strength. It teaches us to trust the process, even when we can&rsquo;t see the results right away. Whether it&rsquo;s waiting for a career breakthrough, personal growth, or healing from emotional wounds, the best things often take time. When we rush, we risk missing the lessons along the way.&lt;/p&gt;&lt;p&gt;In practicing patience, we develop resilience. It allows us to remain calm in the face of uncertainty, knowing that everything has its season. It gives us the ability to endure setbacks and frustrations without giving up. More importantly, patience helps us cultivate gratitude for the present moment, rather than always rushing towards the next goal.&lt;/p&gt;&lt;p&gt;So, the next time you&rsquo;re feeling frustrated with the pace of life, remember: growth takes time. Be patient with yourself, your journey, and the world around you. In the end, patience is not about waiting&mdash;it&rsquo;s about how we wait. With hope, with trust, and with the quiet belief that everything will unfold exactly as it should.&lt;/p&gt;', 1, '2024-10-04 20:03:16'),
(21, 28, 10, ' The Courage to Start Over: Embracing New Beginnings', '1728052510_img-8.jpg', '&lt;p&gt;Starting over is one of the scariest things we can do. Whether it&rsquo;s changing careers, moving to a new city, or ending a long-term relationship, the idea of leaving behind the familiar can be overwhelming. But in every ending, there&rsquo;s also a beginning&mdash;a chance to rewrite our story and take control of our future.&lt;/p&gt;&lt;p&gt;It takes immense courage to start over because it often means stepping into the unknown. When we leave behind the life we&rsquo;ve known, we&rsquo;re forced to confront our fears, uncertainties, and insecurities. Will we succeed? Will we fail? These questions can paralyze us. But the truth is, staying in a situation that no longer serves us is often far more painful than taking the leap.&lt;/p&gt;&lt;p&gt;Starting over is not a sign of failure; it&rsquo;s a sign of growth. It means you&rsquo;ve recognized that something in your life isn&rsquo;t working, and instead of staying stuck, you&rsquo;ve chosen to move forward. It&rsquo;s a testament to your resilience and your belief that better things lie ahead.&lt;/p&gt;&lt;p&gt;The first step in any new beginning is letting go. Letting go of the past, of the mistakes you&rsquo;ve made, and of the expectations you had. This is often the hardest part, but it&rsquo;s necessary. Only when we release what&rsquo;s behind us can we fully embrace what&rsquo;s ahead.&lt;/p&gt;&lt;p&gt;New beginnings are filled with opportunities. They give us the chance to redefine ourselves, to pursue passions we&rsquo;ve ignored, and to build a life that aligns with our true selves. And while the road may be uncertain, it&rsquo;s also full of possibility.&lt;/p&gt;&lt;p&gt;So, if you&rsquo;re standing at the edge of a new chapter, take a deep breath. Trust yourself and the journey ahead. Starting over may be difficult, but it&rsquo;s also the most powerful way to create the life you truly want.&lt;/p&gt;', 1, '2024-10-04 20:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(5, 'Life', '<p>life</p>'),
(6, 'Quotes', '<p>qutyt</p>'),
(7, 'Fiction', '<p>fiction</p>'),
(8, 'Biography', '<p>bio</p>'),
(9, 'Motivation', '<p>motivate</p>'),
(10, 'Inspiration', '<p>inspire</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(27, 1, 'pragati gupta', 'pragatirg4@gmail.com', '$2y$10$KxwNh4180LA1JPurI1IiJuGN69QfJIe5YyuMKCK99f5AQjV4gUbKO', '2024-10-02 22:43:33'),
(28, 1, 'blog', 'blog@gmail.com', '$2y$10$Y64EErclrNPJHIXNMOyNbuAoJ1yYzOfIT58DKGh2BjZ5BpTAcCEKO', '2024-10-03 01:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
