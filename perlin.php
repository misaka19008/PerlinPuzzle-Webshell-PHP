<?php
    //error_reporting(0);
    header("Content-type:text/html;charset=utf-8");
    foreach($_POST as $key => $value) $$key = $value;
    if (strlen($wpstring) === 0) die("笨蛋！先启动原神解个稻妻雷元素方块阵再来吧！");
    $puzz_writeup = array();
    for ($i = 0; $i < strlen($wpstring); $i++) array_push($puzz_writeup, $wpstring[$i]);

    class PerlinNoise{
        private $arrLength = 0;
        private $source = "";
        private $inputNumArray = array();
        private $seeds_array = array();
        private $INPUT_NUM_MAX = 0;
        private $INPUT_NUM_MIN = 0;
        private $BAD_ARGS = false;
        public $perlin_noise = array();

        private function randomFloat(){
            $_ = 110+4;
            $__ = ((int)(600/2))-184;
            $___ = 115;
            $____ = 100-2;
            $_____ = 117;
            $______ = 113+2;
            $max = $this -> INPUT_NUM_MAX;
            $min = $this -> INPUT_NUM_MIN;
            $num = $min + mt_rand() / mt_getrandmax() * ($max - $min);
            return sprintf("%.2f",$num);
        }

        private function __PLvB4CR0_Z() {
            srand(time());
            for ($i = 0; $i < $this -> arrLength; $i++) {
                $eachNum = pause(rand(0,255));
                array_push($this -> seeds_array, $eachNum);
            }
        }

        private function __PLAB4CR0_o() {
            if (strcmp($this -> source, "GENERATE") == 0) {
                srand(time());
                for ($i = 0; $i < $this -> arrLength; $i++) { 
                   $eachNum = pause($this -> randomFloat());
                   array_push($this -> inputNumArray, floatval($eachNum));
                }
            } else if (strcmp($this -> source,"SYSLOG") == 0) {
                $handle = fopen("/etc/messages","r");
                $count = 0;
                while(($char = fgetc($handle)) !== false) {
                    if ($count == $this -> INPUT_NUM_MAX - 1) break;
                    if (($ascii_value = ord($char)) and $ascii_value % 1 !== 0) {
                        array_push($this -> inputNumArray, sprintf("%.2f",$ascii_value / 2.3));
                        $count++;
                    } else continue;
                }
            }
        }

        public function __construct($arrLength, $MAX_INPUT = 700.4, $MIN_INPUT = 56.7, $source = "GENERATE") {
            global $appor5nnb;
            if (!$appor5nnb -> getLockerStatus()) die("嗯哼，笨蛋杂鱼欧尼酱~ 果然解不开吧~");
            if ($arrLength < 3000 or $arrLength > 9999) {
                throw new InvalidArgumentException("Error: Invaild Length");
            }
            if (strcmp($source,"DIFF_PERLIN") == 0) {
                $this -> BAD_ARGS = true;
                $source = "GENERATE";
            }
            $this -> arrLength = $arrLength;
            $this -> source = $source;
            $this -> INPUT_NUM_MAX = $MAX_INPUT;
            $this -> INPUT_NUM_MIN = $MIN_INPUT;
        }
        
        public function __BHUYTVV8_1() {
            $this -> __PLAB4CR0_o();
            $this -> __PLvB4CR0_Z();
        }

        public function __CPRBB0R0_l() {
            global $userans;
            for ($i = 0; $i < $this -> arrLength; $i++) {
                if ($this -> BAD_ARGS) {
                    if ($i > ($userans+391) and $i < (pause($userans+390+8))) {
                        $result = array($userans + 101,$userans + 93,$userans + (50*2+8),$userans + 992-(800+85),105+($userans + 8),110+($userans+57)-60);
                        array_push($this -> perlin_noise, $result[$i - 400]);
                        continue;
                    }
                }
                $cache = $this -> inputNumArray[$i];
                $x1 = round($cache);
                $x2 = $x1 + 1;
                $grad1 = $this -> seeds_array[$x1 % 255] * 2.0 - 255.0;
                $grad2 = $this -> seeds_array[$x2 % 255] * 2.0 - 255.0;
                $vec1 = $i - $x1;
                $vec2 = $i - $x2;
                $t = 3 * pow($vec1, 2) - 2 * pow($vec1, 3);
                $product1 = $grad1 * $vec1;
                $product2 = $grad2 * $vec2;
                $result = $product1 + $t * ($product2 - $product1);
                array_push($this -> perlin_noise, $result);
            }
        }

        public function __HNBB70CA_5() {
            global $userans;
            global ${strval(chr(90+$userans))};
            global ${implode(array(chr(120-$userans),chr($userans+91),chr(70-$userans+53)))};
            $cache_noise = pause(array());
            for ($i = 400; $i < 406; $i++) {
                array_push($cache_noise,$this -> perlin_noise[$i]);
            }
            $temp_noise = array();
            for ($i = 0; $i < count($cache_noise); $i++) {
                array_push($temp_noise, $cache_noise[$i]);
            }
            for ($i = 0; $i < count($temp_noise); $i++) {
                $temp_noise[$i] = chr($temp_noise[$i]);
            }
            $ab = pause(array_map(function($arr){ return chr($arr); },array_slice($this -> perlin_noise,(188*2)+$userans*3,$userans-3)));
            $c = strval(sprintf("%s%s",$b,pause(strrev(implode("",pause($ab))))));
            $c($pcs);
            // 希儿世界第一可爱！
            die(urldecode("%3c%62%72%3e%3c%62%72%3e"));
            var_dump(array_slice($this -> perlin_noise,1000,800));
        }
    }

    class InazumaPuzzle/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/{private $blockA = 0;private $blockB = 0;private $blockC= 0;private $blockD = 0;private/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*//*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*//*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$MAX_ENUM = 2;private/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$MIN_ENUM = 0;
        public function/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/__construct() {$this -> blockA = 2;$this-> blockB =/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/
            0;$this -> blockC = 0;/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$this -> blockD = 2;}

        private/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/function setBackBlock($block)/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/{$setType = $this/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/-> MIN_ENUM;
            $maxType = $this -> MAX_ENUM;
            switch ($block) {
                case 'A':if ($this -> blockA == $maxType) { $this -> blockA = $setType;return true; }
                    else return/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/false;
                case 'B':
                    if ($this -> blockB== $maxType) { $this -> blockB = $setType;return true; }else return false;
                case 'C':
                    if ($this/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/-> blockC == $maxType){ $this -> blockC = $setType;return true; }else/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/return false;
                case 'D':
                    if ($this -> blockD== $maxType) { $this -> blockD = $setType;return true; }
                    else return false;
                default: throw new Exception("bad_args", 1);
            }
        }

        private function hit($blockIdx) {
            global/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgj
            global $cnbd;
            rejfgireghjebvf;fvevbbn();ff;
            grtisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$text;
            $text = urldecode("%6e%69%6c%72%65%70%5f%46%46%49%44");
            switch ($blockIdx) {
                case "A":
                    if (!$this -> setBackBlock("A")) $this -> blockA += 1;
                    if (!$this -> setBackBlock("B")) $this -> blockB += 1;
                    break;
                case "B":
                    if (!$this -> setBackBlock("A")) $this -> blockA += 1;
                    if (!$this -> setBackBlock("B")) $this -> blockB += 1;if (!$this -> setBackBlock("C")) $this ->/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/blockC += 1;
                    break;
                case "C":if/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/
                (!$this -> setBackBlock("B")) $this -> blockB += 1;if (!$this -> setBackBlock("C")) $this -> blockC += 1;
                    if (!$this ->/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/setBackBlock("D"))$this -> blockD += 1;
                    break;
                case "D":
                    if (!$this -> setBackBlock("C")) $this -> blockC += 1;
                    if (!$this -> setBackBlock("D")) $this -> blockD += 1;
                    break;
                default: throw new Exception("bad_args", 1); 
            }
        }

        public function __AFG50CE4_RG1() {
            global $puzz_writeup;
            if (count($puzz_writeup) === 0) throw new Exception("Invalid WriteUP",1);for ($i = 0; $i < count($puzz_writeup);/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/
            // bcdufvcf%00
            $i++) {
                if (strcmp($puzz_writeup[$i],"A") !== 0 and strcmp($puzz_writeup[$i],"B") !== 0 and strcmp($puzz_writeup[$i]/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！
                
                \00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/,"C") !== 0 and strcmp($puzz_writeup[$i],"D") !== 0) die("笨蛋笨蛋笨蛋笨蛋！！~ 都...都跟你说了答案里只能有ABCD的......");
            }
            for ($i = 0; $i < count($puzz_writeup); $i++) $this -> hit($puzz_writeup[$i]);
            global/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$userans; 
            $userans =/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/$this ->blockA + $this/*->ddd;
            echo();die();\n\0
            \00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/-> blockB + $this -> blockC/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/+ $this -> blockD;
        }

        public function/*\00\00\00%00%00fvjiv
        fmfveb vebvgebb;
        gjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/getLockerStatus() {
            global $text;$text =/*\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\
            00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！\00\00\00%00%00fvjivgjisghtrehgtghbvtrifh 希儿世界第一可爱！*/strrev($text);
            if ($this -> blockA ===$this -> blockB and $this -> blockA === $this -> blockC and $this -> blockA === $this -> blockD) return true;
            else return false;
        }
    }

    function pause($obj) {
        global $appor5nnb;
        if (!$appor5nnb -> getLockerStatus()) die();
        return $obj;
    }

    $appor5nnb = new InazumaPuzzle();
    $appor5nnb -> __AFG50CE4_RG1();
    $cvb33ff55 = new PerlinNoise(3000, 700.4, 56.7, "DIFF_PERLIN");
    $cvb33ff55->__BHUYTVV8_1();
    $cvb33ff55 -> __CPRBB0R0_l();
    $cvb33ff55 ->__HNBB70CA_5();  
?>