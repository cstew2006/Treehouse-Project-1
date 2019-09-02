<?php

// PHP - Random Quote Generator



//Multidimensional array for quote elements
//Inner associative array elements
$quotes[] = [

    'quote' => 'Everything has a beginning and an end. Life is just a cycle of starts and stops. There are ends we don’t desire, but they’re inevitable. We have to face them. It’s what being human is all about.',
    'source' => 'Jet Black',
    'citation' => 'Cowboy Bebop',
    'year' => '1998',
    'tag' => 'People',

  ];

$quotes[] = [

    'quote' => 'Men always seem to think about their past before they die, as though they were frantically searching for proof that they truly lived.',
    'source' => 'Jet Black',
    'citation' => 'Cowboy Bebop',
    'year' => '1998',
    'tag' => 'People',

  ];

$quotes[] = [

    'quote' => 'They often say that humans can’t live alone. But you can live pretty long by yourself. Instead of feeling alone in a group, it’s better to be alone in your solitude.',
    'source' => 'Faye Valentine',
    'citation' => 'Cowboy Bebop',
    'year' => '1998',
    'tag' => 'People',

];

$quotes[] = [

    'quote' => 'All men are not created equal.',
    'source' => 'Izuku Midoriya.',
    'citation' => 'My Hero Academia',
    'year' => '2016',
    'tag' => 'Life',

];

$quotes[] = [

    'quote' => 'My motivation might seem trivial compared to yours, but I can’t lose, either.  I have to live up to the hopes of those who supported me.',
    'source' => 'Izuku Midoriya',
    'citation' => 'My Hero Academia',
    'year' => '2016',
    'tag' => 'Motivational',

];


$quotes[] = [

    'quote' => 'The slight difference between those who always aim for the top and those who don’t, it’ll come to matter in a big way once you all emerge into society.',
    'source' => 'All Might',
    'citation' => 'My Hero Academia',
    'year' => '2016',
    'tag' => 'Life',

];

$quotes[] = [

    'quote' => 'There’s nothing crueler than letting a dream end midway. ',
    'source' => 'Shouta Aizawa',
    'citation' => 'My Hero Academia',
    'year' => '2016',
    'tag' => 'Dreams',

];

$quotes[] = [

    'quote' => 'To avoid unkind criticism say nothing, be nothing, do nothing',
    'source' => 'Aristotle',
    'citation' => 'The Philistine',
    'year' => '1910',
    'tag' => 'Inspirational',

];

$quotes[] = [

    'quote' => 'What we do for ourselves dies with us.  What we do for others and the world remains and is immortal.',
    'source' => 'Albert Pike',
    'citation' => 'Ex Corde Locutiones: Words from the Heart Spoken of His Dead Brethren',
    'year' => '1874',
    'tag' => 'Community',

];
$quotes[] = [

    'quote' => 'Whoever undertakes to set himself up as judge in the field of truth and knowledge is shipwrecked by the laughter of the gods.',
    'source' => 'Albert Einstein',
    'citation' => '',
    'year' => '1953',
    'tag' => 'Truth',

];

$quotes[] = [

    'quote' => 'Politics is not a game, but a serious business.',
    'source' => 'Winston Churchill',
    'citation' => '',
    'year' => '1909',
    'tag' => 'Politics',

];

$quotes[] = [

    'quote' => 'Man is least himself when he talks in his own person.  Give him a mask, and he will tell you the truth.',
    'source' => 'Oscar Wilde',
    'citation' => 'The Critic as Artist',
    'year' => '1891',
    'tag' => 'Inspirational',

];
$quotes[] = [

    'quote' => 'Fairy tales do not tell children that dragons exist.  Children already know that dragons exist.  Fairy tales tell children that dragons can be killed.',
    'source' => 'G.K. Chesterton',
    'citation' => '',
    'year' => '',
    'tag' => 'Hope',

];

$quotes[] = [

    'quote' => 'In youth we learn; in age we understand.',
    'source' => 'Marie Von Ebner-Eschenbach',
    'citation' => 'Aphorisms',
    'year' => '1880/1893',
    'tag' => 'Life',

];

$quotes[] = [

    'quote' => 'Monsters are real, and ghosts are real too.  They live inside us, and sometimes, they win.',
    'source' => 'Stephen King',
    'citation' => 'The Shining',
    'year' => '1977',
    'tag' => 'Life',

];
$quotes[] = [

    'quote' => 'If there were no hell, we would be like the animals.  No hell, no dignity.',
    'source' => 'Flannery O’Connor',
    'citation' => 'Collected Works',
    'year' => '1988',
    'tag' => 'People',

];

$quotes[] = [

    'quote' => 'Men are more ready to repay an injury than a benefit, because gratitude is a burden and revenge a pleasure.',
    'source' => 'Tacitus',
    'citation' => '',
    'year' => '55-120 A.D.',
    'tag' => 'Life',

];
$quotes[] = [

    'quote' => 'Show me a hero, and I will write you a tragedy.',
    'source' => 'F. Scott Fitzgerald',
    'citation' => 'Notebook E',
    'year' => '1945',
    'tag' => 'Perspective',

];
$quotes[] = [

    'quote' => 'A lion’s work hours are only when he’s hungry. Once he’s satisfied, the predator and prey lie peacefully together.',
    'source' => 'Chuck Jones',
    'citation' => 'Stroke of Genius, A Collection of Paintings and Musings on Life, Love and Art',
    'year' => '2007',
    'tag' => 'Enlightenment',

];
$quotes[] = [

    'quote' => 'When I was younger, I could remember anything, whether it had happened or not. But my faculties are decaying now, and soon I shall be so that I cannot remember any but the things that never happened.',
    'source' => 'Mark Twain',
    'citation' => '',
    'year' => '1907',
    'tag' => 'The Inevitable',

];


//Create a function called getRandomQuote

function getRandomQuote($array){

    $randomNum = rand(0, 19);
    //Passing on the randomly selected inner associative array

    return $array[$randomNum];

  }

//printQuote funtion will print the returned quote from the getRandomQuote function

function printQuote(){
    global $quotes;
  $aQuote = getRandomQuote($quotes);

    $quoteOutput = '';


    if ($aQuote['citation'] != '' || $aQuote['year'] != '' || $aQuote['tag'] != ''){

      $quoteOutput = "<p class='quote'>" . $aQuote['quote'] . "</p>";
      $quoteOutput .= "<p class='source'>" . $aQuote['source'];
      $quoteOutput .= "<span class='citation'>" . $aQuote['citation'] . "</span>";
      $quoteOutput .= "<span class='year'>" . $aQuote['year'] . "</span>";
      $quoteOutput .= "<br/>";
      $quoteOutput .= "</p>";
      $quoteOutput .= "<p class='tag'>Tag:" . $aQuote['tag'] . "</p>";

    } else {

      $quoteOutput = "<p class='quote'>" . $aQuote['quote'] . "</p>";
      $quoteOutput .= "<p class='source'>" . $aQuote['source'] . "</p>";

    }

    //Will print the final quote to the screen
      echo $quoteOutput;

  }

  //Running the printQuote function


?>
