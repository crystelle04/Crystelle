<?php
// Data for the resume
$name = "Crystelle Julienne Nieves";
$jobTitle = "Web Developers";
$contact = [
    'email' => 'nievescrystelle@gmail.com',
    'phone' => '+639054922746',
    'Fb' => 'Crystelle Julienne Nieves',
    'github' => 'crystelle04', 
];
$summary = "Results-driven web developer with over 10 years of experience in building responsive and accessible web applications. Skilled in modern frameworks and technologies, with a strong focus on user experience and performance optimization.";
$skills = ['HTML', 'CSS', 'PHP', 'MySQL'];
$experience = [
        'title' => 'Web Developer',
        'company' => 'Enhance Tech',
        'duration' => '2028 - Present',
        'description' => 'Efficient and knowledgeable coder with skills in HTML, CSS, PHP, and JavaScript programming languages.'
];
$education = [
    [
        'degree' => 'Bachelor of Science in Information Technology',
        'institution' => 'Guimaras State University',
        'year' => '2026'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?>'s Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f8ff; /* Light background */
    color: #333;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    background: linear-gradient(135deg, #007BFF, #00CFFF); /* Gradient background */
    color: white;
    padding: 30px;
    border-radius: 10px 10px 0 0;
}

h1 {
    margin: 0;
    font-size: 2.5em;
}

h2 {
    margin: 0;
    font-size: 1.5em;
    font-weight: 400;
}

.contact-info {
    margin: 15px 0;
}

.contact-info p {
    margin: 5px 0;
}

.contact-info a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info a:hover {
    color: #FFD700; /* Gold color on hover */
}

.summary, .skills, .experience, .education {
    margin: 25px 0;
    padding: 15px;
    border-radius: 5px;
}

.summary {
    background-color: #e0f7fa; /* Light cyan */
}

.skills {
    background-color: #ffe0b2; /* Light orange */
}

.experience {
    background-color: #d1c4e9; /* Light purple */
}

.education {
    background-color: #c8e6c9; /* Light green */
}

h3 {
    border-bottom: 2px solid #007BFF;
    padding-bottom: 5px;
    font-size: 1.5em;
}

.job, .edu {
    background: #ffffff;
    border-left: 5px solid #007BFF;
    padding: 15px;
    margin: 15px 0;
    border-radius: 5px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    background: #d1ecf1;
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
}
</style>
<body>
    <div class="container">
        <header>
            <h1><?php echo $name; ?></h1>
            <h2><?php echo $jobTitle; ?></h2>
            <div class="contact-info">
                <p>Email: <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
                <p>Phone: <?php echo $contact['phone']; ?></p>
                <p>Facebook: <a href="https://www.facebook.com/share/1GPZ1JmpUa/" target="_blank"><?php echo $contact['Fb']; ?></a></p>
                <p>GitHub: <a href="https://github.com/<?php echo $contact['github']; ?>" target="_blank"><?php echo $contact['github']; ?></a></p>
            </div>
        </header>
        <section class="summary">
            <h3>Summary</h3>
            <p><?php echo $summary; ?></p>
        </section>
        <section class="skills">
            <h3>Skills</h3>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="experience">
            <h3>Experience</h3>
                <div class="job">
                    <h4><?php echo $experience['title']; ?> at <?php echo $experience['company']; ?></h4>
                    <p><em><?php echo $experience['duration']; ?></em></p>
                    <p><?php echo $experience['description']; ?></p>
                </div>
        </section>
        <section class="education">
            <h3>Education</h3>
            <?php foreach ($education as $edu): ?>
                <div class="edu">
                    <h4><?php echo $edu['degree']; ?> from <?php echo $edu['institution']; ?></h4>
                    <p><em><?php echo $edu['year']; ?></em></p>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>
</html>
