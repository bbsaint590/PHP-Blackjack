<?php

$cards =  [
    ['suit' => 'clubs', 'faceValue' => 2, 'pointsValue' => 2],
    ['suit' => 'clubs', 'faceValue' => 3, 'pointsValue' => 3],
    ['suit' => 'clubs', 'faceValue' => 4, 'pointsValue' => 4],
    ['suit' => 'clubs', 'faceValue' => 5, 'pointsValue' => 5],
    ['suit' => 'clubs', 'faceValue' => 6, 'pointsValue' => 6],
    ['suit' => 'clubs', 'faceValue' => 7, 'pointsValue' => 7],
    ['suit' => 'clubs', 'faceValue' => 8, 'pointsValue' => 8],
    ['suit' => 'clubs', 'faceValue' => 9, 'pointsValue' => 9],
    ['suit' => 'clubs', 'faceValue' => 10, 'pointsValue' => 10],
    ['suit' => 'clubs', 'faceValue' => 'jack', 'pointsValue' => 10],
    ['suit' => 'clubs', 'faceValue' => 'queen', 'pointsValue' => 10],
    ['suit' => 'clubs', 'faceValue' => 'king', 'pointsValue' => 10],
    ['suit' => 'clubs', 'faceValue' => 'ace', 'pointsValue' => 11],

    ['suit' => 'diamonds', 'faceValue' => 2, 'pointsValue' => 2],
    ['suit' => 'diamonds', 'faceValue' => 3, 'pointsValue' => 3],
    ['suit' => 'diamonds', 'faceValue' => 4, 'pointsValue' => 4],
    ['suit' => 'diamonds', 'faceValue' => 5, 'pointsValue' => 5],
    ['suit' => 'diamonds', 'faceValue' => 6, 'pointsValue' => 6],
    ['suit' => 'diamonds', 'faceValue' => 7, 'pointsValue' => 7],
    ['suit' => 'diamonds', 'faceValue' => 8, 'pointsValue' => 8],
    ['suit' => 'diamonds', 'faceValue' => 9, 'pointsValue' => 9],
    ['suit' => 'diamonds', 'faceValue' => 10, 'pointsValue' => 10],
    ['suit' => 'diamonds', 'faceValue' => 'jack', 'pointsValue' => 10],
    ['suit' => 'diamonds', 'faceValue' => 'queen', 'pointsValue' => 10],
    ['suit' => 'diamonds', 'faceValue' => 'king', 'pointsValue' => 10],
    ['suit' => 'diamonds', 'faceValue' => 'ace', 'pointsValue' => 11],

    ['suit' => 'hearts', 'faceValue' => 2, 'pointsValue' => 2],
    ['suit' => 'hearts', 'faceValue' => 3, 'pointsValue' => 3],
    ['suit' => 'hearts', 'faceValue' => 4, 'pointsValue' => 4],
    ['suit' => 'hearts', 'faceValue' => 5, 'pointsValue' => 5],
    ['suit' => 'hearts', 'faceValue' => 6, 'pointsValue' => 6],
    ['suit' => 'hearts', 'faceValue' => 7, 'pointsValue' => 7],
    ['suit' => 'hearts', 'faceValue' => 8, 'pointsValue' => 8],
    ['suit' => 'hearts', 'faceValue' => 9, 'pointsValue' => 9],
    ['suit' => 'hearts', 'faceValue' => 10, 'pointsValue' => 10],
    ['suit' => 'hearts', 'faceValue' => 'jack', 'pointsValue' => 10],
    ['suit' => 'hearts', 'faceValue' => 'queen', 'pointsValue' => 10],
    ['suit' => 'hearts', 'faceValue' => 'king', 'pointsValue' => 10],
    ['suit' => 'hearts', 'faceValue' => 'ace', 'pointsValue' => 11],

    ['suit' => 'spades', 'faceValue' => 2, 'pointsValue' => 2],
    ['suit' => 'spades', 'faceValue' => 3, 'pointsValue' => 3],
    ['suit' => 'spades', 'faceValue' => 4, 'pointsValue' => 4],
    ['suit' => 'spades', 'faceValue' => 5, 'pointsValue' => 5],
    ['suit' => 'spades', 'faceValue' => 6, 'pointsValue' => 6],
    ['suit' => 'spades', 'faceValue' => 7, 'pointsValue' => 7],
    ['suit' => 'spades', 'faceValue' => 8, 'pointsValue' => 8],
    ['suit' => 'spades', 'faceValue' => 9, 'pointsValue' => 9],
    ['suit' => 'spades', 'faceValue' => 10, 'pointsValue' => 10],
    ['suit' => 'spades', 'faceValue' => 'jack', 'pointsValue' => 10],
    ['suit' => 'spades', 'faceValue' => 'queen', 'pointsValue' => 10],
    ['suit' => 'spades', 'faceValue' => 'king', 'pointsValue' => 10],
    ['suit' => 'spades', 'faceValue' => 'ace', 'pointsValue' => 11],
];

shuffle ($cards);

function getCards($cards) {
    return [
        'suit' => $cards['suit'],
        'faceValue' => $cards['faceValue'],
        'pointsValue' => $cards['pointsValue']
    ];
}

$card1 = $cards[0];
$card2 = $cards[1];

$card1Properties = getCards($card1);
$card2Properties = getCards($card2);

function p1FirstCard($card1Properties)
{
    echo "<pre>";
    echo "First card:";
    echo "<br>";
    echo "Suit: " . $card1Properties['suit'];
    echo "<br>";
    echo "Face Value: " . $card1Properties['faceValue'];
    echo "<br>";
    echo "Points Value: " . $card1Properties['pointsValue'];
    echo "<br>";
}

p1FirstCard($card1Properties);

function p1SecondCard($card2Properties)
{
    echo "<pre>";
    echo "Second card:";
    echo "<br>";
    echo "Suit: " . $card2Properties['suit'];
    echo "<br>";
    echo "Face Value: " . $card2Properties['faceValue'];
    echo "<br>";
    echo "Points Value: " . $card2Properties['pointsValue'];
    echo "<br>";
}

p1SecondCard($card2Properties);

$score = $card1['pointsValue'] + $card2['pointsValue'];

echo "<pre>";
echo "<b>Player 1 score: $score</b>";
echo "<br>";

if ($score < 14) {

    $card5 = $cards[5];
    $card5Properties = getCards($card5);

    function p1ThirdCard($card5Properties, $score, $card5)
    {
        echo "<pre>";
        echo "Third card:";
        echo "<br>";
        echo "Suit: " . $card5Properties['suit'];
        echo "<br>";
        echo "Face Value: " . $card5Properties['faceValue'];
        echo "<br>";
        echo "Points Value: " . $card5Properties['pointsValue'];
        echo "<br>";
        $p1FinalScore = $score + $card5['pointsValue'];

        echo "<pre>";
        echo "<b>Player 1 final score: $p1FinalScore</b>";
        echo "<br>";
    }

    p1ThirdCard($card5Properties, $score, $card5);
}

$card3 = $cards[2];
$card4 = $cards[3];

$card3Properties = getCards($card3);
$card4Properties = getCards($card4);

function p2FirstCard($card3Properties)
{
    echo "<pre>";
    echo "First card:";
    echo "<br>";
    echo "Suit: " . $card3Properties['suit'];
    echo "<br>";
    echo "Face Value: " . $card3Properties['faceValue'];
    echo "<br>";
    echo "Points Value: " . $card3Properties['pointsValue'];
    echo "<br>";
}

p2FirstCard($card3Properties);

function p2SecondCard($card4Properties)
{
    echo "<pre>";
    echo "Second card:";
    echo "<br>";
    echo "Suit: " . $card4Properties['suit'];
    echo "<br>";
    echo "Face Value: " . $card4Properties['faceValue'];
    echo "<br>";
    echo "Points Value: " . $card4Properties['pointsValue'];
    echo "<br>";
}

p2SecondCard($card4Properties);

$score2 = $card3['pointsValue'] + $card4['pointsValue'];

echo "<pre>";
echo "<b>Player 2 score: $score2</b>";
echo "<br>";

if ($score2 < 14) {

    $card6 = $cards[6];
    $card6Properties = getCards($card6);

    function p2ThirdCard($card6Properties, $score2, $card6)
    {
        echo "<pre>";
        echo "Third card:";
        echo "<br>";
        echo "Suit: " . $card6Properties['suit'];
        echo "<br>";
        echo "Face Value: " . $card6Properties['faceValue'];
        echo "<br>";
        echo "Points Value: " . $card6Properties['pointsValue'];
        echo "<br>";
        $p2FinalScore = $score2 + $card6['pointsValue'];

        echo "<pre>";
        echo "<b>Player 2 final score: $p2FinalScore</b>";
        echo "<br>";
    }

    p2ThirdCard($card6Properties, $score2, $card6);
}
function outcome($score, $score2)
{
    if ($score > 21) {
        echo "<h1>Player 1 bust!</h1>";
    } elseif ($score2 > 21) {
        echo "<h1>Player 2 bust!</h1>";
    } elseif ($score === 21) {
        echo "<h1>Player 1 blackjack!</h1>";
    } elseif ($score2 === 21) {
        echo "<h1>Player 2 blackjack!</h1>";
    } elseif ($score === $score2) {
        echo "<h1>Draw.</h1>";
    } elseif ($score > $score2) {
        echo "<h1>Player 1 wins!</h1>";
    } elseif ($score < $score2) {
        echo "<h1>Player 2 wins!</h1>";
    } else {
        return "<h1>No one got bust or blackjack.";
    }
}

echo "<br>";
echo outcome($score, $score2);