<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_POST['idag'];

$showagent=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
$showagent->execute();
if ($showagent===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resinter=$showagent->get_result();

								?>
<?php
while ($shworesult=$resinter->fetch_row()) {
								?>

<?php if(($shworesult[11]=='RopeWorks')||($shworesult[11]=='Both')){?>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 383.3 396" style="enable-background:new 0 0 383.3 396;" xml:space="preserve">
<style type="text/css">
	.st0{opacity:0.4;}
	.st1{fill:#F2B39E;}
	.st2{fill:#333333;}
	.st3{fill:#253459;}
	.st4{fill:#1A2C4C;}
	.st5{fill:#00A1DB;}
	.st6{fill:#303156;}
	.st7{fill:#026D89;}
	.st8{fill:#DBDBDB;}
	.st9{fill:#9B9B9B;}
	.st10{fill:#183A4C;}
	.st11{fill:#19252D;}
	.st12{fill:#CEDAEF;}
	.st13{fill:#E8EEF9;}
	.st14{fill:#133054;}
	.st15{fill:#EDA515;}
	.st16{fill:#A34A00;}
	.st17{fill:#758259;}
	.st18{fill:#424733;}
	.st19{fill:#2B2B2B;}
	.st20{fill:#4A4A4A;}
	.st21{fill:#493222;}
	.st22{fill:#636363;}
	.st23{fill:#B3B3B3;}
	.st24{fill:#8C8C8C;}
	.st25{fill:#352215;}
	.st26{fill:#6B4328;}
	.st27{fill:#8E5732;}
	.st28{fill:#E5ECF9;}
	.st29{fill:#CEDAED;}
	.st30{fill:#1A2230;}
	.st31{fill:#07273B;}
	.st32{fill:#354A63;}
	.st33{fill:#A5A5A5;}
</style>
<g id="face">
	<title>Face</title>
	<ellipse class="st0" cx="195.2" cy="354.4" rx="62.4" ry="4.8"/>
	<path class="st1" d="M214.1,85.5c-2.4-0.5-4.4,9.1-2,9.6c2.4,0.5,4.7-1.3,5.3-3.9C217.9,88.6,216.4,86,214.1,85.5z"/>
	<path class="st1" d="M179.6,85.5c-2.4,0.5-3.8,3-3.3,5.7c0.6,2.7,2.9,4.4,5.3,3.9C183.9,94.6,181.9,85,179.6,85.5z"/>
	<path class="st1" d="M196.3,68c-15.3,0-16.1,11-16.1,11s-6.9,24,16.5,33.7c22.5-8.8,16.2-33.4,16.2-33.4S209.6,68,196.3,68z"/>
	<path class="st2" d="M196.7,63.7c-22.6-2.4-18.6,22.5-18.6,22.5s2.3-0.3,3.2,3c-0.1,0.5,1.9-10.7,1.9-10.7s10.9,8.7,24,2.5
		c0-4.2,3.7-3.6,3.9,0.1c0.2,2.8,0.7,7.5,0.7,7.5s1.7-3.1,3.3-2.7C215,85.2,218.7,60.9,196.7,63.7z"/>
</g>

	<g id="combine">
		<title>Combine</title>
	<path class="st3" d="M204.8,108.9h-16.5c-0.9,0-1.6,0.7-1.6,1.5v9.1c0,0.8,0.7,1.5,1.6,1.5h16.5c0.9,0,1.6-0.7,1.6-1.5v-9.1
		C206.4,109.5,205.7,108.9,204.8,108.9z"/>
	<rect x="188.3" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="191.3" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="194.4" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="197.5" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="200.6" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="203.6" y="111.3" class="st4" width="1.2" height="9"/>
	<path class="st5" d="M234.8,124.6c-0.6-5.3-27.9-9.6-27.9-9.6l-9.1,4.6l-2,0l-9.4-4.6c0,0-27.5,4.5-27.9,9.6
		c-2.5,10.7-32.1,27.6-34.7,41.9c-0.3,5.7,20.8,31,20.8,31l8.7-6.3l-11.2-24.3l23.1-19.7l0,0.1l0.1,84c0,0,10.1,73.9,11.9,85.6
		c0.5,0.4,11.6,0.2,17,0.1c0.4-12.9,1.7-59.1,0.9-63.7c0-1.3,0.1-7,0.1-8.3c1.8-2.9,0.8-8.8,1.2-14.9c0.2,0,0.1,14.9,1.3,14.9
		c0.3,0.6,0.2,7.5,0.2,8c-1,0.7-0.2,63.9-0.2,63.9s16.3,1.1,17.5,0c6.2-6.4,12.3-84.3,12.3-84.3l-0.9-85.3l22.6,19.6L238,191.1
		l8.7,6.3c0,0,21.1-25.3,20.8-31C264.9,152.2,237.2,135.2,234.8,124.6z"/>
	<path class="st5" d="M194.6,230.1h0.4c2.7,0,4.9-2,4.9-4.6v-19.1h-5.3V230.1z"/>
	<polygon class="st6" points="195.8,202.2 197.5,202.2 197.6,119.6 195.8,119.5 	"/>
	<polygon class="st7" points="208.9,233.3 209.9,231.8 196.7,230.1 	"/>
	<polygon class="st7" points="201.5,233.5 202.1,233.3 196.7,230.1 	"/>
	<polygon class="st7" points="185.6,234.3 196.3,230.1 184.9,233.1 	"/>
</g>


<g id="helmet">
	<title>Helmet</title>
	<path class="st8" d="M197.7,59.2h-1.8c-11.1,0-20.1,9-20.1,20.1v0.2h41.9v-0.2C217.8,68.2,208.8,59.2,197.7,59.2z"/>
	<path class="st9" d="M200.3,59.4h-7.1c-5,5.9-3.3,14.8-16.7,18.1h40.2C203.5,74.2,205.3,65.2,200.3,59.4z"/>
	<path class="st8" d="M200.1,57.8h-6.8c0,0-0.4,19.8-18.9,19.8v3.1h44.7v-3.1C200.5,77.5,200.1,57.8,200.1,57.8z"/>
	<rect x="174.4" y="79.1" class="st9" width="44.7" height="3.5"/>
	<path class="st8" d="M174.4,82.6c0,2.1,11.2,5,22.4,5c11.2,0,22.3-2.8,22.3-5c0,0-11.1-3.2-22.3-3.2
		C185.7,79.5,174.4,82.6,174.4,82.6z"/>
</g>
<g id="glasses">
	<title>Glasses</title>
	<g>
		<path class="st10" d="M187.7,87c-4,0-8.1,1.6-8.2,5.4c-0.1,3.9,4.2,8.9,8.2,9c3.5,0,5.2-1.3,6.2-3c0.8-1.3,1.3-2.7,2.8-2.7V87
			H187.7z"/>
		<path class="st11" d="M205.9,87h-9.1v8.7c1.6,0,2,1.4,2.8,2.7c1.1,1.7,2.7,3,6.2,3c4,0,8.3-5.1,8.2-9C214,88.6,209.9,87,205.9,87z
			"/>
	</g>
	<g>
		<path class="st12" d="M210.7,89.5c-1.2-0.7-2.9-1.1-4.8-1.1h-9.1v5.9h0c2.2,0,3.1,1.6,3.8,2.8c0.1,0.2,0.2,0.4,0.4,0.6
			c0.7,1.2,1.8,2.3,4.8,2.3c0,0,0.1,0,0.1,0c1.3,0,2.7-0.8,4.1-2.1c1.4-1.3,2.3-3.1,2.6-4.6c0.1-0.3,0.1-0.6,0.1-0.9
			C212.5,91.2,211.9,90.2,210.7,89.5z"/>
		<path class="st13" d="M187.7,88.4c-1.9,0-3.6,0.4-4.8,1.1c-1.2,0.7-1.9,1.7-1.9,3c0,0.3,0,0.6,0.1,0.9c0.3,1.5,1.2,3.2,2.6,4.6
			c1.3,1.3,2.8,2,4.1,2.1c0,0,0.1,0,0.1,0c3,0,4.1-1.1,4.8-2.3c0.1-0.2,0.2-0.4,0.4-0.6c0.7-1.2,1.6-2.8,3.8-2.8v-5.9H187.7z"/>
	</g>
	<g class="st0">
		<path class="st14" d="M212.9,93.4c-0.2,0-0.4,0.9-0.6,0.8c-0.6-4.2-4.4-5.1-7.3-5.8h0.9c1.9,0,3.6,0.4,4.8,1.1
			c1.2,0.7,1.9,1.7,1.9,3C212.6,92.8,213,93.1,212.9,93.4z"/>
	</g>
	<g class="st0">
		<path class="st14" d="M180.7,93.4c0.2,0,0.4,0.9,0.6,0.8c0.6-4.2,4.4-5.1,7.3-5.8h-0.9c-1.9,0-3.6,0.4-4.8,1.1
			c-1.2,0.7-1.9,1.7-1.9,3C181,92.8,180.7,93.1,180.7,93.4z"/>
	</g>
</g>
<g id="leftglove">
	<title>Left Glove</title>
	<g>
		<path class="st15" d="M238.4,189.9c-3.4,3.4-9.6,4.7-10.9,7.1c-0.1,3.7-1,10.4,1.4,12.5c3.4,1.1,8.3,2.1,12.3,0.1
			c1.1-2.3,0.7-6.1,0.7-6.1s1.6,0.6,3.2-0.6c3.2-2.9,4-4.6,4-4.6l9.1-14.5l-13-9.9L238.4,189.9z"/>
	</g>
	<path class="st16" d="M241.5,192.4c-1.7-1.2-2.9-2.3-3-2.1c-0.1,0.2,1.1,1.3,2.8,2.5c1.7,1.2,5.4,3.4,5.6,3.2
		C247,195.9,243.2,193.6,241.5,192.4z"/>
</g>
<g id="rightglove">
	<title>Right Glove</title>
	<g>
		<path class="st15" d="M154.3,189.9l-7.2-13.6l-12.3,9.3l8.7,12.5c0,0,0.8,1.8,4,4.6c1.6,1.2,3.2,0.6,3.2,0.6s-0.4,3.7,0.7,6.1
			c4.1,2.1,8.9,1,12.3-0.1c2.4-2.1,1.6-8.8,1.4-12.5C163.9,194.6,157.7,193.4,154.3,189.9z"/>
	</g>
	<path class="st16" d="M150.6,192.5c-1.7,1.2-4.6,2.9-4.5,3.1c0.1,0.2,3.1-1.5,4.8-2.7c1.7-1.2,2.9-2.3,2.8-2.5
		C153.5,190.2,152.3,191.3,150.6,192.5z"/>
</g>
<g id="leftboot">
	<title>Left Boot</title>
	<path class="st17" d="M229.1,339.9l-9.3-1c-2.3-0.1-4.1-1.9-4.1-4v-11.2H198v12.2v14.6h19.3H238v-3.2
		C238,342.6,234,339.9,229.1,339.9z"/>
	<path class="st18" d="M229.1,339.9c0,0-4.2,0.1-4.2,10.6c0.7,0,13.1,0,13.1,0v-3.2C238,342.6,234,339.9,229.1,339.9z"/>
	<path class="st18" d="M198.2,348l-0.2-19.5v22.1l27.3-0.2V348C221.1,348,203.9,348,198.2,348z"/>
	<polyline class="st19" points="237.9,353.7 238.6,353.7 238.6,350.5 197.5,350.5 197.5,353.7 198.6,353.7 	"/>
	<line class="st19" x1="231.8" y1="353.7" x2="236" y2="353.7"/>
	<line class="st19" x1="225.7" y1="353.7" x2="229.8" y2="353.7"/>
	<line class="st19" x1="219.5" y1="353.7" x2="223.7" y2="353.7"/>
	<line class="st19" x1="213.4" y1="353.7" x2="217.6" y2="353.7"/>
	<line class="st19" x1="207.3" y1="353.7" x2="211.5" y2="353.7"/>
	<line class="st19" x1="200.6" y1="353.7" x2="205.3" y2="353.7"/>
	<path class="st19" d="M215.7,332.1h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,332.4,216.4,332.1,215.7,332.1z"/>
	<path class="st19" d="M215.7,328.9h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,329.2,216.4,328.9,215.7,328.9z"/>
	<path class="st19" d="M215.7,325.9h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,326.2,216.4,325.9,215.7,325.9z"/>
	<path class="st19" d="M216.2,316.9h-18.8c-0.6,0-1.1,0.4-1.1,1v4.8c0,0.5,0.5,1,1.1,1h18.8c0.6,0,1.1-0.4,1.1-1v-4.8
		C217.3,317.4,216.8,316.9,216.2,316.9z"/>
	<polyline class="st19" points="199.1,353.7 199.1,354.8 202.5,354.8 202.5,353.7 	"/>
	<polyline class="st19" points="204.2,353.7 204.2,354.8 207.6,354.8 207.6,353.7 	"/>
	<polyline class="st19" points="208.7,353.7 208.7,354.8 212.1,354.8 212.1,353.7 	"/>
	<polyline class="st19" points="213.8,353.7 213.8,354.8 217.2,354.8 217.2,353.7 	"/>
	<polyline class="st19" points="218.9,353.7 218.9,354.8 222.3,354.8 222.3,353.7 	"/>
	<polyline class="st19" points="224,353.7 224,354.8 227.4,354.8 227.4,353.7 	"/>
	<polyline class="st19" points="229.3,353.7 229.3,354.8 232.8,354.8 232.8,353.7 	"/>
	<polyline class="st19" points="234.4,353.7 234.4,354.8 237.8,354.8 237.8,353.7 	"/>
</g>
<g id="rightboot">
	<title>Right Boot</title>
	<path class="st17" d="M162.7,339.9l9.3-1c2.3-0.1,4.1-1.9,4.1-4v-11.2h17.7v12.2v14.6h-19.3h-20.7v-3.2
		C153.8,342.6,157.8,339.9,162.7,339.9z"/>
	<path class="st18" d="M162.7,339.9c0,0,4.2,0.1,4.2,10.6c-0.7,0-13.1,0-13.1,0v-3.2C153.8,342.6,157.8,339.9,162.7,339.9z"/>
	<path class="st18" d="M193.6,348l0.2-19.5v22.1l-27.3-0.2V348C170.8,348,188,348,193.6,348z"/>
	<polyline class="st19" points="153.9,353.7 153.2,353.7 153.2,350.5 194.4,350.5 194.4,353.7 193.2,353.7 	"/>
	<line class="st19" x1="160" y1="353.7" x2="155.9" y2="353.7"/>
	<line class="st19" x1="166.2" y1="353.7" x2="162" y2="353.7"/>
	<line class="st19" x1="172.3" y1="353.7" x2="168.1" y2="353.7"/>
	<line class="st19" x1="178.4" y1="353.7" x2="174.2" y2="353.7"/>
	<line class="st19" x1="184.5" y1="353.7" x2="180.4" y2="353.7"/>
	<line class="st19" x1="191.3" y1="353.7" x2="186.5" y2="353.7"/>
	<path class="st19" d="M176.2,332.1h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,332.4,175.5,332.1,176.2,332.1z"/>
	<path class="st19" d="M176.2,328.9h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,329.2,175.5,328.9,176.2,328.9z"/>
	<path class="st19" d="M176.2,325.9h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,326.2,175.5,325.9,176.2,325.9z"/>
	<path class="st19" d="M175.6,316.9h18.8c0.6,0,1.1,0.4,1.1,1v4.8c0,0.5-0.5,1-1.1,1h-18.8c-0.6,0-1.1-0.4-1.1-1v-4.8
		C174.6,317.4,175.1,316.9,175.6,316.9z"/>
	<polyline class="st19" points="192.8,353.7 192.8,354.8 189.3,354.8 189.3,353.7 	"/>
	<polyline class="st19" points="187.7,353.7 187.7,354.8 184.3,354.8 184.3,353.7 	"/>
	<polyline class="st19" points="183.2,353.7 183.2,354.8 179.8,354.8 179.8,353.7 	"/>
	<polyline class="st19" points="178.1,353.7 178.1,354.8 174.7,354.8 174.7,353.7 	"/>
	<polyline class="st19" points="172.9,353.7 172.9,354.8 169.5,354.8 169.5,353.7 	"/>
	<polyline class="st19" points="167.8,353.7 167.8,354.8 164.4,354.8 164.4,353.7 	"/>
	<polyline class="st19" points="162.5,353.7 162.5,354.8 159.1,354.8 159.1,353.7 	"/>
	<polyline class="st19" points="157.4,353.7 157.4,354.8 154,354.8 154,353.7 	"/>
</g>
<g id="harness">
	<title>Harness</title>
	<rect x="164.7" y="199.2" class="st20" width="63.5" height="7.3"/>
	<polygon class="st21" points="163.9,225.2 169.1,226 169.1,206 163.9,204.6 	"/>
	<polygon class="st21" points="167.1,222.1 168.1,222.6 168.1,206.5 167.1,206.5 	"/>
	<polygon class="st22" points="169.7,208.4 178.2,208.4 178.2,116.5 169.7,118.5 	"/>
	<path class="st23" d="M168.9,154.2h10.2v-9.5h-10.2V154.2z M170.7,146.4h6.5v6.1h-6.5V146.4z"/>
	<path class="st23" d="M168.9,207.6h10.2v-9.5h-10.2V207.6z M170.7,199.8h6.5v6.1h-6.5V199.8z"/>
	<polygon class="st22" points="213.5,208.4 222,208.4 222,118 213.5,116.2 	"/>
	<path class="st23" d="M212.6,154.2h10.2v-9.5h-10.2V154.2z M214.5,146.4h6.5v6.1h-6.5V146.4z"/>
	<path class="st23" d="M212.6,207.6h10.2v-9.5h-10.2V207.6z M214.5,199.8h6.5v6.1h-6.5V199.8z"/>
	<path class="st23" d="M189.3,207.2h13.4v-8.6h-13.4V207.2z M191.7,200.1h8.6v5.5h-8.6V200.1z"/>
	<rect x="170.7" y="146.4" class="st20" width="50.3" height="6.1"/>
	<rect x="191.5" y="146" class="st24" width="9.8" height="7.1"/>
	<polygon class="st20" points="196.4,230.7 227.1,216.6 227.2,208.3 196.3,222.5 	"/>
	<path class="st23" d="M205.5,216.9l4.6,8.8l9.5-4.2l-4.6-8.8L205.5,216.9z M210.9,223.4l-2.9-5.6l6.1-2.7l2.9,5.6L210.9,223.4z"/>
	<polygon class="st20" points="165.5,216.7 196.4,230.7 196.3,222.5 165.4,208.3 	"/>
	<path class="st23" d="M174,221.7l9.5,4.2l4.6-8.8l-9.5-4.2L174,221.7z M185.5,218l-2.9,5.6l-6.1-2.7l2.9-5.6L185.5,218z"/>
	<polygon class="st25" points="162.4,225.8 163.9,225.2 163.9,205.2 162.4,205.2 	"/>
	<polygon class="st26" points="167.7,226.9 162.4,224.9 162.4,206.4 167.7,209.8 	"/>
	<polygon class="st27" points="167.7,226.9 169.1,226.3 169.1,220.1 167.7,220.4 	"/>
</g>
<g id="">
	<title>GENIWORKS</title>
<image style="overflow:visible;" width="135" height="135" id="logo" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1
MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
OkRvY3VtZW50SUQ9InhtcC5kaWQ6QkVGMTk3MTIyRkE2MTFFOTlBMTFFMjBEQ0ZBNTlGNkMiIHht
cE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkVGMTk3MTEyRkE2MTFFOTlBMTFFMjBEQ0ZBNTlGNkMi
IHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpE
ZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ5ODRFN0EwMkY3RjExRTk5QjQw
QzVCNDk1QkFBRTgyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ5ODRFN0ExMkY3RjExRTk5
QjQwQzVCNDk1QkFBRTgyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBt
ZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+lDjixAAAQpxJREFUeNrsXQdgFFXzn/TeKQm9916lCYhU
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
rkJggg==" transform="matrix(9.467466e-002 0 0 9.203010e-002 200.28 133.9646)">
</image>
</g>
<g id="mask">
	<title>Mask</title>
	<g>
		<path class="st28" d="M194.5,98.6l-8.8,10.4c-1.3,1.5-0.2,2.8,2.3,2.8h8.8V97.5C196,97.5,195.1,97.9,194.5,98.6z"/>
		<path class="st29" d="M207.9,109.1l-8.8-10.4c-0.6-0.8-1.5-1.1-2.3-1.1v14.4h8.8C208.2,111.9,209.2,110.6,207.9,109.1z"/>
	</g>
	<path class="st30" d="M188,112.3c-2.6,0-3.6-0.8-2.3-1.8l8.8-6.9c1.3-1,3.4-1,4.6,0l8.8,6.9c1.3,1,0.2,1.8-2.3,1.8H188z"/>
	<g>
		<g>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 400.0025 -12.1593)" class="st31" cx="203.5" cy="109.4" rx="5.1" ry="1.6"/>
			
				<rect x="200.5" y="108.2" transform="matrix(-0.5 0.866 -0.866 -0.5 404.1775 -12.1593)" class="st32" width="10.2" height="4.8"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 408.3526 -12.159)" class="st32" cx="207.7" cy="111.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 401.3941 -12.1593)" class="st32" cx="204.2" cy="109.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 408.3532 -12.1581)" class="st33" cx="207.7" cy="111.8" rx="4.5" ry="1.2"/>
			<path class="st33" d="M202.8,109c1.4-2.4,3-3.9,3.9-3.6l-0.6-0.4c-0.8-0.4-2.5,1.2-3.9,3.6c-1.4,2.4-1.9,4.8-1.2,5.2l0.6,0.4
				C200.9,113.6,201.5,111.3,202.8,109z"/>
		</g>
		<g>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.799 -109.9581)" class="st31" cx="190.1" cy="109.4" rx="5.1" ry="1.6"/>
			<rect x="182.9" y="108.2" transform="matrix(0.5 0.866 -0.866 0.5 189.799 -107.5476)" class="st32" width="10.2" height="4.8"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7985 -105.1372)" class="st32" cx="186" cy="111.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7989 -109.1546)" class="st32" cx="189.4" cy="109.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7984 -105.1372)" class="st33" cx="186" cy="111.8" rx="4.5" ry="1.2"/>
			<path class="st33" d="M190.8,109c-1.4-2.4-3-3.9-3.9-3.6l0.6-0.4c0.8-0.4,2.5,1.2,3.9,3.6c1.4,2.4,1.9,4.8,1.2,5.2l-0.6,0.4
				C192.7,113.6,192.2,111.3,190.8,109z"/>
		</g>
	</g>
</g>
</svg>


<?php }elseif($shworesult[11]=='CleanWorks'){?>

<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 383.3 396" style="enable-background:new 0 0 383.3 396;" xml:space="preserve">
<style type="text/css">
	.st0{opacity:0.4;}
	.st1{fill:#F2B39E;}
	.st2{fill:#333333;}
	.st3{fill:#253459;}
	.st4{fill:#1A2C4C;}
	.st5{fill:#00A1DB;}
	.st6{fill:#303156;}
	.st7{fill:#026D89;}
	.st8{fill:#DBDBDB;}
	.st9{fill:#9B9B9B;}
	.st10{fill:#183A4C;}
	.st11{fill:#19252D;}
	.st12{fill:#CEDAEF;}
	.st13{fill:#E8EEF9;}
	.st14{fill:#133054;}
	.st15{fill:#EDA515;}
	.st16{fill:#A34A00;}
	.st17{fill:#758259;}
	.st18{fill:#424733;}
	.st19{fill:#2B2B2B;}
	.st20{fill:#4A4A4A;}
	.st21{fill:#493222;}
	.st22{fill:#636363;}
	.st23{fill:#B3B3B3;}
	.st24{fill:#8C8C8C;}
	.st25{fill:#352215;}
	.st26{fill:#6B4328;}
	.st27{fill:#8E5732;}
	.st28{fill:#E5ECF9;}
	.st29{fill:#CEDAED;}
	.st30{fill:#1A2230;}
	.st31{fill:#07273B;}
	.st32{fill:#354A63;}
	.st33{fill:#A5A5A5;}
</style>
<g id="face">
	<title>Face</title>
	<ellipse class="st0" cx="195.2" cy="354.4" rx="62.4" ry="4.8"/>
	<path class="st1" d="M214.1,85.5c-2.4-0.5-4.4,9.1-2,9.6c2.4,0.5,4.7-1.3,5.3-3.9C217.9,88.6,216.4,86,214.1,85.5z"/>
	<path class="st1" d="M179.6,85.5c-2.4,0.5-3.8,3-3.3,5.7c0.6,2.7,2.9,4.4,5.3,3.9C183.9,94.6,181.9,85,179.6,85.5z"/>
	<path class="st1" d="M196.3,68c-15.3,0-16.1,11-16.1,11s-6.9,24,16.5,33.7c22.5-8.8,16.2-33.4,16.2-33.4S209.6,68,196.3,68z"/>
	<path class="st2" d="M196.7,63.7c-22.6-2.4-18.6,22.5-18.6,22.5s2.3-0.3,3.2,3c-0.1,0.5,1.9-10.7,1.9-10.7s10.9,8.7,24,2.5
		c0-4.2,3.7-3.6,3.9,0.1c0.2,2.8,0.7,7.5,0.7,7.5s1.7-3.1,3.3-2.7C215,85.2,218.7,60.9,196.7,63.7z"/>
</g>
<g id="combine">
	<title>Combine</title>
	<path class="st3" d="M204.8,108.9h-16.5c-0.9,0-1.6,0.7-1.6,1.5v9.1c0,0.8,0.7,1.5,1.6,1.5h16.5c0.9,0,1.6-0.7,1.6-1.5v-9.1
		C206.4,109.5,205.7,108.9,204.8,108.9z"/>
	<rect x="188.3" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="191.3" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="194.4" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="197.5" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="200.6" y="111.3" class="st4" width="1.2" height="9"/>
	<rect x="203.6" y="111.3" class="st4" width="1.2" height="9"/>
	<path class="st5" d="M234.8,124.6c-0.6-5.3-27.9-9.6-27.9-9.6l-9.1,4.6l-2,0l-9.4-4.6c0,0-27.5,4.5-27.9,9.6
		c-2.5,10.7-32.1,27.6-34.7,41.9c-0.3,5.7,20.8,31,20.8,31l8.7-6.3l-11.2-24.3l23.1-19.7l0,0.1l0.1,84c0,0,10.1,73.9,11.9,85.6
		c0.5,0.4,11.6,0.2,17,0.1c0.4-12.9,1.7-59.1,0.9-63.7c0-1.3,0.1-7,0.1-8.3c1.8-2.9,0.8-8.8,1.2-14.9c0.2,0,0.1,14.9,1.3,14.9
		c0.3,0.6,0.2,7.5,0.2,8c-1,0.7-0.2,63.9-0.2,63.9s16.3,1.1,17.5,0c6.2-6.4,12.3-84.3,12.3-84.3l-0.9-85.3l22.6,19.6L238,191.1
		l8.7,6.3c0,0,21.1-25.3,20.8-31C264.9,152.2,237.2,135.2,234.8,124.6z"/>
	<path class="st5" d="M194.6,230.1h0.4c2.7,0,4.9-2,4.9-4.6v-19.1h-5.3V230.1z"/>
	<polygon class="st6" points="195.8,202.2 197.5,202.2 197.6,119.6 195.8,119.5 	"/>
	<polygon class="st7" points="208.9,233.3 209.9,231.8 196.7,230.1 	"/>
	<polygon class="st7" points="201.5,233.5 202.1,233.3 196.7,230.1 	"/>
	<polygon class="st7" points="185.6,234.3 196.3,230.1 184.9,233.1 	"/>
</g>
<g id="helmet">
	<title>Helmet</title>
	<path class="st8" d="M197.7,59.2h-1.8c-11.1,0-20.1,9-20.1,20.1v0.2h41.9v-0.2C217.8,68.2,208.8,59.2,197.7,59.2z"/>
	<path class="st9" d="M200.3,59.4h-7.1c-5,5.9-3.3,14.8-16.7,18.1h40.2C203.5,74.2,205.3,65.2,200.3,59.4z"/>
	<path class="st8" d="M200.1,57.8h-6.8c0,0-0.4,19.8-18.9,19.8v3.1h44.7v-3.1C200.5,77.5,200.1,57.8,200.1,57.8z"/>
	<rect x="174.4" y="79.1" class="st9" width="44.7" height="3.5"/>
	<path class="st8" d="M174.4,82.6c0,2.1,11.2,5,22.4,5c11.2,0,22.3-2.8,22.3-5c0,0-11.1-3.2-22.3-3.2
		C185.7,79.5,174.4,82.6,174.4,82.6z"/>
</g>
<g id="glasses">
	<title>Glasses</title>
	<g>
		<path class="st10" d="M187.7,87c-4,0-8.1,1.6-8.2,5.4c-0.1,3.9,4.2,8.9,8.2,9c3.5,0,5.2-1.3,6.2-3c0.8-1.3,1.3-2.7,2.8-2.7V87
			H187.7z"/>
		<path class="st11" d="M205.9,87h-9.1v8.7c1.6,0,2,1.4,2.8,2.7c1.1,1.7,2.7,3,6.2,3c4,0,8.3-5.1,8.2-9C214,88.6,209.9,87,205.9,87z
			"/>
	</g>
	<g>
		<path class="st12" d="M210.7,89.5c-1.2-0.7-2.9-1.1-4.8-1.1h-9.1v5.9h0c2.2,0,3.1,1.6,3.8,2.8c0.1,0.2,0.2,0.4,0.4,0.6
			c0.7,1.2,1.8,2.3,4.8,2.3c0,0,0.1,0,0.1,0c1.3,0,2.7-0.8,4.1-2.1c1.4-1.3,2.3-3.1,2.6-4.6c0.1-0.3,0.1-0.6,0.1-0.9
			C212.5,91.2,211.9,90.2,210.7,89.5z"/>
		<path class="st13" d="M187.7,88.4c-1.9,0-3.6,0.4-4.8,1.1c-1.2,0.7-1.9,1.7-1.9,3c0,0.3,0,0.6,0.1,0.9c0.3,1.5,1.2,3.2,2.6,4.6
			c1.3,1.3,2.8,2,4.1,2.1c0,0,0.1,0,0.1,0c3,0,4.1-1.1,4.8-2.3c0.1-0.2,0.2-0.4,0.4-0.6c0.7-1.2,1.6-2.8,3.8-2.8v-5.9H187.7z"/>
	</g>
	<g class="st0">
		<path class="st14" d="M212.9,93.4c-0.2,0-0.4,0.9-0.6,0.8c-0.6-4.2-4.4-5.1-7.3-5.8h0.9c1.9,0,3.6,0.4,4.8,1.1
			c1.2,0.7,1.9,1.7,1.9,3C212.6,92.8,213,93.1,212.9,93.4z"/>
	</g>
	<g class="st0">
		<path class="st14" d="M180.7,93.4c0.2,0,0.4,0.9,0.6,0.8c0.6-4.2,4.4-5.1,7.3-5.8h-0.9c-1.9,0-3.6,0.4-4.8,1.1
			c-1.2,0.7-1.9,1.7-1.9,3C181,92.8,180.7,93.1,180.7,93.4z"/>
	</g>
</g>
<g id="leftglove">
	<title>Left Glove</title>
	<g>
		<path class="st15" d="M238.4,189.9c-3.4,3.4-9.6,4.7-10.9,7.1c-0.1,3.7-1,10.4,1.4,12.5c3.4,1.1,8.3,2.1,12.3,0.1
			c1.1-2.3,0.7-6.1,0.7-6.1s1.6,0.6,3.2-0.6c3.2-2.9,4-4.6,4-4.6l9.1-14.5l-13-9.9L238.4,189.9z"/>
	</g>
	<path class="st16" d="M241.5,192.4c-1.7-1.2-2.9-2.3-3-2.1c-0.1,0.2,1.1,1.3,2.8,2.5c1.7,1.2,5.4,3.4,5.6,3.2
		C247,195.9,243.2,193.6,241.5,192.4z"/>
</g>
<g id="rightglove">
	<title>Right Glove</title>
	<g>
		<path class="st15" d="M154.3,189.9l-7.2-13.6l-12.3,9.3l8.7,12.5c0,0,0.8,1.8,4,4.6c1.6,1.2,3.2,0.6,3.2,0.6s-0.4,3.7,0.7,6.1
			c4.1,2.1,8.9,1,12.3-0.1c2.4-2.1,1.6-8.8,1.4-12.5C163.9,194.6,157.7,193.4,154.3,189.9z"/>
	</g>
	<path class="st16" d="M150.6,192.5c-1.7,1.2-4.6,2.9-4.5,3.1c0.1,0.2,3.1-1.5,4.8-2.7c1.7-1.2,2.9-2.3,2.8-2.5
		C153.5,190.2,152.3,191.3,150.6,192.5z"/>
</g>
<g id="leftboot">
	<title>Left Boot</title>
	<path class="st17" d="M229.1,339.9l-9.3-1c-2.3-0.1-4.1-1.9-4.1-4v-11.2H198v12.2v14.6h19.3H238v-3.2
		C238,342.6,234,339.9,229.1,339.9z"/>
	<path class="st18" d="M229.1,339.9c0,0-4.2,0.1-4.2,10.6c0.7,0,13.1,0,13.1,0v-3.2C238,342.6,234,339.9,229.1,339.9z"/>
	<path class="st18" d="M198.2,348l-0.2-19.5v22.1l27.3-0.2V348C221.1,348,203.9,348,198.2,348z"/>
	<polyline class="st19" points="237.9,353.7 238.6,353.7 238.6,350.5 197.5,350.5 197.5,353.7 198.6,353.7 	"/>
	<line class="st19" x1="231.8" y1="353.7" x2="236" y2="353.7"/>
	<line class="st19" x1="225.7" y1="353.7" x2="229.8" y2="353.7"/>
	<line class="st19" x1="219.5" y1="353.7" x2="223.7" y2="353.7"/>
	<line class="st19" x1="213.4" y1="353.7" x2="217.6" y2="353.7"/>
	<line class="st19" x1="207.3" y1="353.7" x2="211.5" y2="353.7"/>
	<line class="st19" x1="200.6" y1="353.7" x2="205.3" y2="353.7"/>
	<path class="st19" d="M215.7,332.1h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,332.4,216.4,332.1,215.7,332.1z"/>
	<path class="st19" d="M215.7,328.9h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,329.2,216.4,328.9,215.7,328.9z"/>
	<path class="st19" d="M215.7,325.9h-9.4c-0.7,0-1.3,0.3-1.3,0.6v0.7c0,0.3,0.6,0.6,1.3,0.6h9.4c0.7,0,1.3-0.3,1.3-0.6v-0.7
		C217,326.2,216.4,325.9,215.7,325.9z"/>
	<path class="st19" d="M216.2,316.9h-18.8c-0.6,0-1.1,0.4-1.1,1v4.8c0,0.5,0.5,1,1.1,1h18.8c0.6,0,1.1-0.4,1.1-1v-4.8
		C217.3,317.4,216.8,316.9,216.2,316.9z"/>
	<polyline class="st19" points="199.1,353.7 199.1,354.8 202.5,354.8 202.5,353.7 	"/>
	<polyline class="st19" points="204.2,353.7 204.2,354.8 207.6,354.8 207.6,353.7 	"/>
	<polyline class="st19" points="208.7,353.7 208.7,354.8 212.1,354.8 212.1,353.7 	"/>
	<polyline class="st19" points="213.8,353.7 213.8,354.8 217.2,354.8 217.2,353.7 	"/>
	<polyline class="st19" points="218.9,353.7 218.9,354.8 222.3,354.8 222.3,353.7 	"/>
	<polyline class="st19" points="224,353.7 224,354.8 227.4,354.8 227.4,353.7 	"/>
	<polyline class="st19" points="229.3,353.7 229.3,354.8 232.8,354.8 232.8,353.7 	"/>
	<polyline class="st19" points="234.4,353.7 234.4,354.8 237.8,354.8 237.8,353.7 	"/>
</g>
<g id="rightboot">
	<title>Right Boot</title>
	<path class="st17" d="M162.7,339.9l9.3-1c2.3-0.1,4.1-1.9,4.1-4v-11.2h17.7v12.2v14.6h-19.3h-20.7v-3.2
		C153.8,342.6,157.8,339.9,162.7,339.9z"/>
	<path class="st18" d="M162.7,339.9c0,0,4.2,0.1,4.2,10.6c-0.7,0-13.1,0-13.1,0v-3.2C153.8,342.6,157.8,339.9,162.7,339.9z"/>
	<path class="st18" d="M193.6,348l0.2-19.5v22.1l-27.3-0.2V348C170.8,348,188,348,193.6,348z"/>
	<polyline class="st19" points="153.9,353.7 153.2,353.7 153.2,350.5 194.4,350.5 194.4,353.7 193.2,353.7 	"/>
	<line class="st19" x1="160" y1="353.7" x2="155.9" y2="353.7"/>
	<line class="st19" x1="166.2" y1="353.7" x2="162" y2="353.7"/>
	<line class="st19" x1="172.3" y1="353.7" x2="168.1" y2="353.7"/>
	<line class="st19" x1="178.4" y1="353.7" x2="174.2" y2="353.7"/>
	<line class="st19" x1="184.5" y1="353.7" x2="180.4" y2="353.7"/>
	<line class="st19" x1="191.3" y1="353.7" x2="186.5" y2="353.7"/>
	<path class="st19" d="M176.2,332.1h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,332.4,175.5,332.1,176.2,332.1z"/>
	<path class="st19" d="M176.2,328.9h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,329.2,175.5,328.9,176.2,328.9z"/>
	<path class="st19" d="M176.2,325.9h9.4c0.7,0,1.3,0.3,1.3,0.6v0.7c0,0.3-0.6,0.6-1.3,0.6h-9.4c-0.7,0-1.3-0.3-1.3-0.6v-0.7
		C174.9,326.2,175.5,325.9,176.2,325.9z"/>
	<path class="st19" d="M175.6,316.9h18.8c0.6,0,1.1,0.4,1.1,1v4.8c0,0.5-0.5,1-1.1,1h-18.8c-0.6,0-1.1-0.4-1.1-1v-4.8
		C174.6,317.4,175.1,316.9,175.6,316.9z"/>
	<polyline class="st19" points="192.8,353.7 192.8,354.8 189.3,354.8 189.3,353.7 	"/>
	<polyline class="st19" points="187.7,353.7 187.7,354.8 184.3,354.8 184.3,353.7 	"/>
	<polyline class="st19" points="183.2,353.7 183.2,354.8 179.8,354.8 179.8,353.7 	"/>
	<polyline class="st19" points="178.1,353.7 178.1,354.8 174.7,354.8 174.7,353.7 	"/>
	<polyline class="st19" points="172.9,353.7 172.9,354.8 169.5,354.8 169.5,353.7 	"/>
	<polyline class="st19" points="167.8,353.7 167.8,354.8 164.4,354.8 164.4,353.7 	"/>
	<polyline class="st19" points="162.5,353.7 162.5,354.8 159.1,354.8 159.1,353.7 	"/>
	<polyline class="st19" points="157.4,353.7 157.4,354.8 154,354.8 154,353.7 	"/>
</g>
<g id="GENIWORKS">
	<title>GENIWORKS</title>
<image style="overflow:visible;" width="135" height="135" id="logo" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1
MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
OkRvY3VtZW50SUQ9InhtcC5kaWQ6QkVGMTk3MTIyRkE2MTFFOTlBMTFFMjBEQ0ZBNTlGNkMiIHht
cE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkVGMTk3MTEyRkE2MTFFOTlBMTFFMjBEQ0ZBNTlGNkMi
IHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpE
ZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ5ODRFN0EwMkY3RjExRTk5QjQw
QzVCNDk1QkFBRTgyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ5ODRFN0ExMkY3RjExRTk5
QjQwQzVCNDk1QkFBRTgyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBt
ZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+lDjixAAAQpxJREFUeNrsXQdgFFXzn/TeKQm9916lCYhU
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
rkJggg==" transform="matrix(9.467466e-002 0 0 9.203010e-002 200.28 133.9646)">
</image>
</g>
<g id="mask">
	<title>Mask</title>
	<g>
		<path class="st28" d="M194.5,98.6l-8.8,10.4c-1.3,1.5-0.2,2.8,2.3,2.8h8.8V97.5C196,97.5,195.1,97.9,194.5,98.6z"/>
		<path class="st29" d="M207.9,109.1l-8.8-10.4c-0.6-0.8-1.5-1.1-2.3-1.1v14.4h8.8C208.2,111.9,209.2,110.6,207.9,109.1z"/>
	</g>
	<path class="st30" d="M188,112.3c-2.6,0-3.6-0.8-2.3-1.8l8.8-6.9c1.3-1,3.4-1,4.6,0l8.8,6.9c1.3,1,0.2,1.8-2.3,1.8H188z"/>
	<g>
		<g>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 400.0025 -12.1593)" class="st31" cx="203.5" cy="109.4" rx="5.1" ry="1.6"/>
			
				<rect x="200.5" y="108.2" transform="matrix(-0.5 0.866 -0.866 -0.5 404.1775 -12.1593)" class="st32" width="10.2" height="4.8"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 408.3526 -12.159)" class="st32" cx="207.7" cy="111.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 401.3941 -12.1593)" class="st32" cx="204.2" cy="109.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(-0.5 0.866 -0.866 -0.5 408.3532 -12.1581)" class="st33" cx="207.7" cy="111.8" rx="4.5" ry="1.2"/>
			<path class="st33" d="M202.8,109c1.4-2.4,3-3.9,3.9-3.6l-0.6-0.4c-0.8-0.4-2.5,1.2-3.9,3.6c-1.4,2.4-1.9,4.8-1.2,5.2l0.6,0.4
				C200.9,113.6,201.5,111.3,202.8,109z"/>
		</g>
		<g>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.799 -109.9581)" class="st31" cx="190.1" cy="109.4" rx="5.1" ry="1.6"/>
			<rect x="182.9" y="108.2" transform="matrix(0.5 0.866 -0.866 0.5 189.799 -107.5476)" class="st32" width="10.2" height="4.8"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7985 -105.1372)" class="st32" cx="186" cy="111.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7989 -109.1546)" class="st32" cx="189.4" cy="109.8" rx="5.1" ry="1.6"/>
			<ellipse transform="matrix(0.5 0.866 -0.866 0.5 189.7984 -105.1372)" class="st33" cx="186" cy="111.8" rx="4.5" ry="1.2"/>
			<path class="st33" d="M190.8,109c-1.4-2.4-3-3.9-3.9-3.6l0.6-0.4c0.8-0.4,2.5,1.2,3.9,3.6c1.4,2.4,1.9,4.8,1.2,5.2l-0.6,0.4
				C192.7,113.6,192.2,111.3,190.8,109z"/>
		</g>
	</g>
</g>
</svg>


<?php }?>

<?php }}?>