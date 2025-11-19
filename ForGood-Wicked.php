<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP Lyric</title>
    <style>
    body { 
        font-family: Arial, sans-serif; 
        background: #f4f4f4;
        padding: 20px; 
        text-align: center;
        background-size: cover;       
        background-position: center; 
        background-repeat: no-repeat; 
        margin: 0;
        min-height: 100vh;            
    }
    h1, h2 {
        color: green; 
        text-align: center; 
        margin: 10px 0;
        font-size: 2em;
        padding: 5px 10px;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    .verse, .chorus, .juggle { 
        margin-bottom: 60px; 
        text-align: center; 
        font-size: 1.2em;

    }
    .chorus { 
        font-weight: bold; 
        color: green;
    }
    .juggle {
        color: #555;
        font-style: italic;
        line-height: 20px;
    }
    h3 {
        margin-bottom: 20px;
    }
    </style>
</head>
<body>

<?php
// Basic string variables
$title = "For Good";
$artist = "Cynthia Erivo & Ariana Grande";
$theme = "Bittersweet";

// Numeric variables
$verseCount = 4;
$repeatChorus = "2"; 

// Arrays of nouns, verbs, adjectives
$nouns = ["heart", "life", "reason", "friend", "wood", "sun", "sea"];
$verbs = ["learn", "grow", "believe", "know", "change", "meet"];
$adjectives = ["good", "better", "distant", "true"];

// Song sections
$verse1 = [
    "I've heard it said that people come into our " . $nouns[1] . " for a " . $nouns[2] . ",",
    "Bringing something we must " . $verbs[0] . ",",
    "And we are led to those who help us most to " . $verbs[1] . ",",
    "If we let them, and we help them in return."
];
$chorus = [
    "Who can say if I've been " . $verbs[4] . "d for the " . $adjectives[1] . "?",
    "But because I knew you, I have been " . $verbs[4] . "d for " . $adjectives[0] . "."
];
$verse2 = [
    "It well may be that we will never " . $verbs[5] . " again in this lifetime,",
    "So let me say before we part,",
    "So much of me is made of what I " . $verbs[0] . "ed from you,",
    "You'll be with me like a handprint on my " . $nouns[0] . "."
];

// Total sections
$totalLines = $verseCount + $repeatChorus;
$lineLabel = "Verse " . 1 * 1; 

// Output
echo "<h1>$title</h1>";
echo "<h3>$artist</h3>";
echo "<p>Theme: $theme</p>";
echo "<p>Total lyrical sections: $totalLines</p>";

echo "<div class='verse'><h3>$lineLabel</h3>";
echo "<p>" . $verse1[0] . "</p>";
echo "<p>" . $verse1[1] . "</p>";
echo "<p>" . $verse1[2] . "</p>";
echo "<p>" . $verse1[3] . "</p>";
echo "</div>";

echo "<div class='chorus'><h3>Chorus</h3>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "</div>";

echo "<div class='verse'><h3>Verse 2</h3>";
echo "<p>" . $verse2[0] . "</p>";
echo "<p>" . $verse2[1] . "</p>";
echo "<p>" . $verse2[2] . "</p>";
echo "<p>" . $verse2[3] . "</p>";
echo "</div>";

// Final chorus with variation
$finalLine = "Because I knew you, I have been " . $verbs[4] . "d for " . strtoupper($adjectives[0]) . ".";
echo "<div class='chorus'><h3>Final Chorus</h3>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>$finalLine</p>";
echo "</div>";

// Juggling section
$juggleLine1 = "Love for our " . $nouns[3] . " is like a " . $nouns[5] . " you get " . $adjectives[2] . ", but";
$juggleLine2 = "we need to " . $verbs[2] . " that friendship isn't always a rainbow. Sometimes, you need to " . $verbs[3] . ".";
$juggleLine3 = "It's like the sun get too close, and it burns you. So, " . $verbs[4] . ".";
$juggleLine4 = "A " . strtoupper($nouns[0]) . " full of " . strtoupper($adjectives[3]) . " moments never fades.";

echo "<div class='juggle'>";
echo "<h3>Thoughts</h3>";
echo "<p>$juggleLine1</p>";
echo "<p>$juggleLine2</p>";
echo "<p>$juggleLine3</p>";
echo "<p>$juggleLine4</p>";
echo "</div>";
?>

</body>
</html>
