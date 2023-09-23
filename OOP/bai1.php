<?php
class gptb1
{
    public $a;
    public $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function giaiPhuongTrinh()
    {
        if ($this->a == 0) {
            if ($this->b == 0) {
                return "Phương trình vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Nghiệm của phương trình: " . (-$this->b / $this->a);
        }
    }
}

class gptb2 extends gptb1
{
    public $c;

    public function __construct($a, $b, $c)
    {
        parent::__construct($a, $b);
        $this->c = $c;
    }

    public function giaiPhuongTrinh()
    {
        if ($this->a == 0) {

            return parent::giaiPhuongTrinh();
        }

        $delta = $this->b * $this->b - 4 * $this->a * $this->c;

        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$this->b / (2 * $this->a);
            return "Nghiệm kép của phương trình: $x";
        } else {
            $x1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
            $x2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
            return "Nghiệm của phương trình: $x1 và $x2";
        }
    }
}

$pt1 = new gptb1(2, -3);
echo $pt1->giaiPhuongTrinh() . "<br>";

$pt2 = new gptb2(1, -5, 6);
echo $pt2->giaiPhuongTrinh();
