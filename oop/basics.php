<?php
class Animal
{
    public bool $is_alive;
    public function breathes(): void
    {
        if ($this::$is_alive)
            echo "*breathing*";
        else echo "This animal is dead";
    }
}
class Dog extends Animal
{
    public string $breed;
    public string $name;
    public static string $classification = "mammal";
    public function bark(): void
    {
        $dog_name = $this->name ?? $this->breed;
        echo "$dog_name says: 'Bark! Bark!'";
    }
    public function __construct(string $breed = "unknown")
    {
        $this->breed = $breed;
    }
}


$Dog1 = new Dog();
$Dog2 = new Dog("pitbul");
$Dog3 = new Dog("german shepard");
$Dog3->name = "Alex";
$dogs = [$Dog1, $Dog2, $Dog3];
for ($i = 0; $i < 5; $i++) {
    array_push($dogs, new Dog());
}
foreach ($dogs as $i => $dog) {
    // echo $dog::$classification . "<br>";
    echo $dog->bark() . "<br>";
    // echo "dog $i : $dog->breed <br>";
}
