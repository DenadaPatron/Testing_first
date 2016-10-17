<!DOCTYPE html>
    <html>
        <head></head>
    <body>

            <?php


          function data($name, $specsno, $sausagesno, $mugsno){
              echo "Wanted: " . $name . "<br/> \n";
              echo "Known to be in possession of the following items: " . "<br/> \n";
              echo "The number of  mugs they own:(" . $mugsno . ")" . "<br/> \n";
              echo "The number of specs they own:(" .$specsno. ")" . "<br/> \n";
              echo "The number of sausage rolls they own :(" . $sausagesno . ")" . "<br/ \n>";


              $aCapt = 10* ((($specsno*$mugsno*$sausagesno)^2)/2);


              echo "Award for the capture: £" . $aCapt;


              data("Arthur", 5, 7, 3);


          }











           /* Now	that	the	specs,	mugs,	and	sausage	roll	lottery	has	occurred,	life	in	Aberdeen	has	started	to	turn	back	to
normal.	However,	the	clean-up	operation	associated	with	the	abuse	of	these	items	must	now	begin.
            Write	a	php	function	that	takes	in:
• A	persons	name
• The	number	of	specs	they	own
• The	number	of	mugs	they	own
• The	Number	of	sausage	rolls	they	own
The	function	must	then	print	out	a	‘wanted’	banner	similar	to	below:
Wanted: Joe Bloggs
Known to be in possession of the following items:
Specs (x)
Mugs (x)
Sausage Rolls (x)
Award for capture: £xx
Use	the	following	equation	to	work	out	the	award	for	capture.
����� ��� ������� = 10 ∗ (���������� ∗ ��������� ∗ �����������������);
2
Call	3	instances	of	this	method	to	produce	wanted	banners	for	people*/
            ?>

        </body>
</html>