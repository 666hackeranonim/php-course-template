 <h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
<?php
$allHobbits = ["бетмен", "газ", "gnom", "я", "убийца", "крутой", "бустер", "слава марлоу"];
$partySize = rand(2, 5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(", ", $party);
$countParty = count($party);
?>
<div class='block'>
    В поход отправятся <?= $countParty?> хоббитов: <?= $names?><br>
</div>
<?php
$transports = ["самокат", "ракета", "дрон", "ашкудика", "нет транспорта"];
$transportCount = count($transports);
$randomIndex = rand(0, $transportCount - 1);
$transport = $transports[$randomIndex];
?>
</div>
<div class='block'>
    <?php if ($transport == 'нет транспорта') { ?>
        К сожалению, транспорта нет. Хоббитам придётся идти пешком!
    <?php } else { ?>
        Хоббиты нашли транспорт: <?= $transport ?>
    <?php } ?>
</div>
<?php
$allSupplies = ["пупси", "газеты", "плойка", "топоры", "телефон", "калаш", "авп", "ультимейт", "патронтаж", "семечки"];
$suppliesCount = rand(2, 6);
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $suppliesCount);
?>
<div class='block'>
    Собрали припасы:<br>
    <?php foreach ($supplies as $supply) {
        echo("- $supply <br>");
    } ?>
</div>
<?php
$partyEvents = [
    "(hobbit) sariniyn длинную подавился умер.",
    "(hobbit) попил с лужи получил временные силы человека червя, спустя 30 секунд уснул (наверное).",
    "(hobbit) начал слышать как моргают рыбки.",
    "(hobbit) сделал додеп.",
    "(hobbit) захотел кушать, еду не взяли пришлось всех съесть."
];
$delayDays = count($supplies);
$eventsCount = rand(1, 3);
shuffle($partyEvents);
$events = array_slice($partyEvents, 0, $eventsCount);
$delayDays += count($events);
foreach ($events as &$event) {
    $randomHobbitIndex = array_rand($party);
    $randomHobbit = $party[$randomHobbitIndex];
    $event = str_replace('(hobbit)', $randomHobbit, $event);
}
$orcsDays = 5;
?>
<div class='block'>
    Случайные события:<br>
    <?php foreach ($events as $event) {
        echo("- $event <br>");
    } ?>
</div>

<div class='block'>
    Общая задержка отряда: <?= $delayDays ?> дней
</div>
<div class='block'>
    <?php
    // 7.3) Проверяем уложились ли хоббиты
    if ($delayDays < $orcsDays) {
        echo "✓ Хоббиты успели выйти в путь раньше орков!";
    } elseif ($delayDays == $orcsDays) {
        echo "✓ Хоббиты успели от орков в самый последний момент";
    } else {
        $lateDays = $delayDays - $orcsDays;
        echo "✗ Орки настигли хоббитов! Хоббиты слишком долго собирались и опоздали на $lateDays дней";
    }
    ?>
</div>