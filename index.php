<?php

echo "super simple hello world using openshift";

echo "<br><br>You can't wear those shoes in the house.";

$lobster = "            `://///+:               oo++++/`              
         `/++:-::/+yy+              o-o/:-:oo/              
       `+o-.-::///d+-+/             s-:o/::::/s/            
      -s-.--:://:+/--/s             -o-://::::-/s-          
     :s..-:///:-+--::s:              +/-://::/+::oo         
    -s..-:::/:-/:-:+/y                s:-://-:/+/:+s        
   `y...:::::----:-:s-                `y:-:::-:/+/:/s       
   +:..-/:-:/:.---:+o                  `y-.-::.:/+/:+o      
   s..-::--::-//::oy                    .y::::-::/+/-o:     
   s--::--:::::-::d-                     `y/--:/::/+/:y     
  .o:::--://::///oo        :s+`           ++----:::://o:    
  :+::--:://::::oo         -MM+           `++-.-:::///+y    
  /+::-://///-/s/           ydh`            /s---::///+y:   
  /o/::////::/y:            -dys             -s---:////oh   
  :s:::/::/s+:.          `--`yoh.`--`         .+o::///++y-  
  `y//+:--/y-          `+o++sh/oso++s/          .y/.-:/+os  
   -h/o//:::/o+:`     -s+yd+:/+//-:dy+s`     .:/+/--:/+o/s: 
    h-:+o+/::::/+o+` /s+soy/::/:/-/sys+s` -/+/:-..:/+/oy--y 
    o+/osso+/:::--:sooodhh+:://://+oyoy+s++..-.--/++++o+-/y 
    `ss//ss+o+/:-.-:/ss-d+/::://+//++dsy+/.`.-:////+shs:/y: 
      so/sdys+:----:-:+s///:/:////:/+o+--:-..--//os+ss/os-  
      .do/y.+yy+:::-.--:/+///:://///+/-..-:---/oo:`oo/y+`   
       /dooo:-+h++:-.-:/++///::///+/++:----//s+.  :s/sy     
///:-..`:yo/++ooh+o+/-/+//o+//:://+++++///+ssh.`-:s/sh.     
ysyhyys++osys+/:+++/oy/sooso+//://++++oso.`.yos+++/ss.`..--.
`..-:/+syoossh+o+/:////osyyso/::/++++o++s++//://oyhs+ossssyy
  :oooo+sdy++os-.:+++o++/oys+/:://+++++/::///+oyysoosso+//-`
  +ssssyhss+oooso-``ysooo+oo+/::/+oo++++y/-..-s+//ys:`      
     `-yhsshyo+ysoo+y+ooosoo+/::+ooo++/+d`.:ooo+++sy-       
     .yhh++odmyoydyo/+oooooo+/-:/+o+++++o++osho+ososh+.     
  ./+yyhysyyyyydyo+o++os++o++:--/+o+++o+o+osh++h+.:yosyo.   
  /dhy/-` `-/sssso+/-+sso+o+/--:/+++++o+h+o+/ossy: -ysysh`  
  -mh.        `-:/oooossoo++/:::/+o++oo++/:os++yoh  .ymsy.  
 -my`               ./do++++/::////+++sdy+s+.  osh.  .+hy`  
-my`                  ohs+ooo++++oosssyoo/.    `hso    -.   
my`                   :yoo+/:--:/ooossd`        s+h         
h`                    .hooooo:::/++oood`        soy         
.                     `msysso+///++sood:         ``         
                       myso+++::/++ossd.                    
                       hyoooo+:-::/+osd`                    
                       msoo+oo/::/+oosho                    
                       yyso/oo/://+oosd.                    
                       oyoooss+///++osd-                    
                       syooooo/:/++oosh/                    
                       .mooooo/-::/+osd                     
                       oysooso/::/+oosh/                    
                       :dsooo+/:::/++sh-                    
                        dso++o+:://++yh                     
                      `+hoo+++/::/++ood:`                   
                  `+ssyyo+++++/:://://ossso+-               
                .ohyssso+//////-:::::://+++oys-             
               `hsooo++oo//++o+:////:////+++++h-            
               :hoo+++osoo/ooo+/+++/////+/+++/y:            
                yhsooooosso+so+++++://///////y+             
                 -+oooooooo+ossssss+///+++++/.              
";

$width = 60;

for( $i = 0; $i <= strlen($lobster); $i++ ) {
         $char = substr( $lobster, $i, 1 );
         if($i == $width){
                  echo "<br>";
		  echo "herehere";
         }else{
                  echo $char;
         }
}

?>
