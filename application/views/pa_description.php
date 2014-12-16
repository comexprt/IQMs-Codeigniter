
<html>
<head>
	<link REL="STYLESHEET" HREF="<?php echo base_url();?>styles/html_reset.css" TYPE="text/css" media=screen />
    <script type="text/javascript" src="<?php echo base_url();?>scripts/description.js" ></script></head>
<body>
	<div class="content" style="background-color:rgba(1, 14, 93, 0.2)">
		<table width="100%" border="1" style="margin: 0px;">
			<tbody>
				<tr>
					<td bgcolor="#010e5d">
						<div align="center" style="font-size:18px;color:white; font-weight:bold">
							LIST OF APPLIANCES
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<p  style="margin: 0px 10px;">
			<br/>Check (&#10004;) the appliances that you want to include.
		</p><br/>
		<form action="addappliance.php" method="POST">
			<div class="table">
				<table width="100%" border="0" style="margin: 0px">
					<tr>
						<th width="5%"> (&#10004;) </th>
						<!--<th width="30%">Unit Code</th>-->
						<th width="52.5%">Description</th>
						<th width="12.5%">Wattage</th>
					</tr>
				</table>
				<div class="scroll-table">	
					<table class="highlight" width="100%" border="1">
						<tbody>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="110" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (0.5 HP)</td>
								<td width="10%"><span style="float:right;">568</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="176" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (0.50 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">568</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="121" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (0.75 HP)</td>
								<td width="10%"><span style="float:right;">727</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="187" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (0.75 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">727</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="132" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (1.0 HP)</td>
								<td width="10%"><span style="float:right;">944</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="2" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (1.00 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">944</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="143" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (1.5 HP)</td>
								<td width="10%"><span style="float:right;">1252</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="13" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (1.50 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">1252</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="154" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (2.0 HP)</td>
								<td width="10%"><span style="float:right;">1913</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="24" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (2.00 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">1913</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="165" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (2.5 HP)</td>
								<td width="10%"><span style="float:right;">2664</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="35" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ACU (2.50 HP) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">2664</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="1" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">AERATOR AQUARIUM</td>
								<td width="10%"><span style="float:right;">3</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="46" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">AIR COOLERIHUMIDIFIER</td>
								<td width="10%"><span style="float:right;">65</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="57" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">AIRPOT</td>
								<td width="10%"><span style="float:right;">600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="68" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BATTERY CHARGER</td>
								<td width="10%"><span style="float:right;">85</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="79" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BLENDER</td>
								<td width="10%"><span style="float:right;">300</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="101" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BREAD SLICER, BAKESHOP</td>
								<td width="10%"><span style="float:right;">373</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="90" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BREAD SLICER. PORTABLE</td>
								<td width="10%"><span style="float:right;">187</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="111" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BREAD TOASTER (2-WAY)</td>
								<td width="10%"><span style="float:right;">800</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="112" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">BREAD TOASTER (4-WAY)</td>
								<td width="10%"><span style="float:right;">1500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="113" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CASH REGISTER</td>
								<td width="10%"><span style="float:right;">45</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="114" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CHANDELIER</td>
								<td width="10%"><span style="float:right;">150</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="115" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CLIPPERII-IAIR CUTTER (PARLOR USE)</td>
								<td width="10%"><span style="float:right;">18</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="116" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CLOCK, DESK OR WALL</td>
								<td width="10%"><span style="float:right;">2</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="117" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CLOTHES DRYER (HEATER)</td>
								<td width="10%"><span style="float:right;">1600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="118" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">CLOTHES DRYER (SPIN MOTOR)</td>
								<td width="10%"><span style="float:right;">250</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="119" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COFFEE MAKER</td>
								<td width="10%"><span style="float:right;">600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="123" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">9</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="125" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">13</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="128" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">19</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="124" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">11</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="126" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">15</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="122" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">7</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="120" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">5</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="127" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPACT FLUORESCENT LAMP</td>
								<td width="10%"><span style="float:right;">18</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="129" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPUTER (WITH MONITOR)</td>
								<td width="10%"><span style="float:right;">225</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="130" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COMPUTER PRINTER</td>
								<td width="10%"><span style="float:right;">175</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="134" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (1.0 liter)</td>
								<td width="10%"><span style="float:right;">450</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="140" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (1.0 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">450</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="133" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (1.8 Iiter)</td>
								<td width="10%"><span style="float:right;">650</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="139" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (1.8 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">650</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="131" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (3.0 liter)</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="138" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, RICE (3.0 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="137" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (1.0 liter)</td>
								<td width="10%"><span style="float:right;">90</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="144" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (1.0 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">90</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="136" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (2.0 liter)</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="142" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (2.0 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="135" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (3.0 liter)</td>
								<td width="10%"><span style="float:right;">180</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="141" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">COOKER, SLOW (3.0 liter) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">180</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="145" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">DENTAl CHAIR</td>
								<td width="10%"><span style="float:right;">167</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="146" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">DISH DRYER</td>
								<td width="10%"><span style="float:right;">500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="147" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">DISHWASHER</td>
								<td width="10%"><span style="float:right;">280</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="159" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, BOX (BIG)</td>
								<td width="10%"><span style="float:right;">90</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="148" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, CEILING (2-BLADER)</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="149" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, CEILING (3-BLADER)</td>
								<td width="10%"><span style="float:right;">140</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="150" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, CEILING (4-BLADER)</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="152" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, DESK (10")</td>
								<td width="10%"><span style="float:right;">40</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="153" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, DESK (12")</td>
								<td width="10%"><span style="float:right;">50</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="155" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, DESK (14")</td>
								<td width="10%"><span style="float:right;">60</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="157" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, DESK (18") TURBO</td>
								<td width="10%"><span style="float:right;">120</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="151" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, DESK (8")</td>
								<td width="10%"><span style="float:right;">30</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="163" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, EXHAUST</td>
								<td width="10%"><span style="float:right;">92</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="161" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, INDUSTRIAL (0.5 hp)</td>
								<td width="10%"><span style="float:right;">373</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="162" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN, STAND (16")</td>
								<td width="10%"><span style="float:right;">80</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="156" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN. DESK (16')</td>
								<td width="10%"><span style="float:right;">80</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="158" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN. DESK (20")</td>
								<td width="10%"><span style="float:right;">175</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="160" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAN. INDUSTRIAL</td>
								<td width="10%"><span style="float:right;">175</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="164" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FAX MACHINE</td>
								<td width="10%"><span style="float:right;">115</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="166" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLAT IRON (STANDARD)</td>
								<td width="10%"><span style="float:right;">600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="167" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLATIRON (DELUXE)</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="169" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLOOR POLISHER (DELUXE)</td>
								<td width="10%"><span style="float:right;">380</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="168" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLOOR POLISHER (STANDARD)</td>
								<td width="10%"><span style="float:right;">200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="177" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (12 W)</td>
								<td width="10%"><span style="float:right;">19</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="175" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (14 V</td>
								<td width="10%"><span style="float:right;">22</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="174" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (16W)</td>
								<td width="10%"><span style="float:right;">26</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="173" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (18W)</td>
								<td width="10%"><span style="float:right;">29</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="172" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (20 W)</td>
								<td width="10%"><span style="float:right;">32</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="171" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (32 W)</td>
								<td width="10%"><span style="float:right;">42</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="170" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FLUORESCENT LAMP (40 W)</td>
								<td width="10%"><span style="float:right;">53</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="179" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (10 CU. FT.)</td>
								<td width="10%"><span style="float:right;">180</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="180" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (12 CU. FT.)</td>
								<td width="10%"><span style="float:right;">200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="181" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (14 CU. FT.)</td>
								<td width="10%"><span style="float:right;">220</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="183" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (18 CU. FT.)</td>
								<td width="10%"><span style="float:right;">260</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="184" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (20 CU. FT.)</td>
								<td width="10%"><span style="float:right;">280</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="178" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, CHEST (8 CU. FT.)</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="186" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, UPRIGHT (10 CU. FT.)</td>
								<td width="10%"><span style="float:right;">170</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="188" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, UPRIGHT (12 CU. FT.)</td>
								<td width="10%"><span style="float:right;">190</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="185" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER, UPRIGHT (8 CU. FT.)</td>
								<td width="10%"><span style="float:right;">150</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="182" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FREEZER. CHEST (16 CU. FT.)</td>
								<td width="10%"><span style="float:right;">240</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="189" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">FRYER</td>
								<td width="10%"><span style="float:right;">680</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="190" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">GRILLER</td>
								<td width="10%"><span style="float:right;">1200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="191" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">HAIR BLOWER (PARLOR USE)</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="192" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">HAIR DRYER</td>
								<td width="10%"><span style="float:right;">320</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="193" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">HAIR STEAMER (PARLOR USE)</td>
								<td width="10%"><span style="float:right;">650</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="194" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">INCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">10</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="3" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">INCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">60</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="197" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">INCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">50</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="196" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">iNCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">40</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="195" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">INCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">25</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="4" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">INCANDESCENT BULB</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="5" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">LD PLAYER</td>
								<td width="10%"><span style="float:right;">45</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="6" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">MEAT CHOPPER</td>
								<td width="10%"><span style="float:right;">700</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="8" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">MOTOR 1.0 HP (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">746</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="7" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">MOTOR 1.0 HP (RESIDENTIAL)</td>
								<td width="10%"><span style="float:right;">746</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="9" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">NEBULIZER</td>
								<td width="10%"><span style="float:right;">184</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="10" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">ORGAN, ELECTRIC</td>
								<td width="10%"><span style="float:right;">150</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="11" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OSTERIZER</td>
								<td width="10%"><span style="float:right;">300</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="17" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVEN TOASTER</td>
								<td width="10%"><span style="float:right;">750</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="12" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVEN, MICROWAVE</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="16" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVEN, MINI</td>
								<td width="10%"><span style="float:right;">1500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="15" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVEN, PIZZA (BIG) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">3600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="14" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVEN, PIZZA (SMALL) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">2000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="18" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">OVERHEAD PROJECTOR</td>
								<td width="10%"><span style="float:right;">500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="19" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">PLAYSTATION</td>
								<td width="10%"><span style="float:right;">45</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="20" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">POPCORN POPPER</td>
								<td width="10%"><span style="float:right;">1200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="23" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">RANGE (2-BURNER)</td>
								<td width="10%"><span style="float:right;">3300</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="22" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">RANGE (4-BURNER)</td>
								<td width="10%"><span style="float:right;">8200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="21" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">RANGE, HOOD</td>
								<td width="10%"><span style="float:right;">92</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="29" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (10 CU. FT.)</td>
								<td width="10%"><span style="float:right;">155</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="30" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (11 CU. FT.)</td>
								<td width="10%"><span style="float:right;">170</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="31" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (12 CU. FT.)</td>
								<td width="10%"><span style="float:right;">185</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="32" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (14 CU. FT.)</td>
								<td width="10%"><span style="float:right;">215</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="33" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (15 CU. FT.)</td>
								<td width="10%"><span style="float:right;">230</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="34" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (16 CU. FT.)</td>
								<td width="10%"><span style="float:right;">245</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="25" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (6 CU. FL)</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="26" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (7 CU. FT.)</td>
								<td width="10%"><span style="float:right;">120</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="27" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (8 CU. FT.)</td>
								<td width="10%"><span style="float:right;">130</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="28" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR (9 CU. FT.)</td>
								<td width="10%"><span style="float:right;">140</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="39" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (10 CU. FT.)</td>
								<td width="10%"><span style="float:right;">300</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="40" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (11 CU. FT.)</td>
								<td width="10%"><span style="float:right;">320</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="41" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (14 CU. FT.)</td>
								<td width="10%"><span style="float:right;">380</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="42" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (16 CU. FT.)</td>
								<td width="10%"><span style="float:right;">670</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="43" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (19 CU. FT.)</td>
								<td width="10%"><span style="float:right;">800</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="37" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (8 CU. FT.)</td>
								<td width="10%"><span style="float:right;">250</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="38" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE, (9 CU. FT.)</td>
								<td width="10%"><span style="float:right;">280</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="36" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">REFRIGERATOR, FROST-FREE. (7 CU. FT.)</td>
								<td width="10%"><span style="float:right;">220</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="44" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SCANNER, COMPUTER (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">12</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="45" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SEALER, PLASTIC (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="48" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SEWING MACHINE (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">187</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="47" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SEWiNG MACNINE</td>
								<td width="10%"><span style="float:right;">75</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="50" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SOFTDRINK VENDO (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">140</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="49" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SOFTORINK COOLER</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="51" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">SOLDERING IRON</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="53" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STEREO (COMPONENT SYSTEM)</td>
								<td width="10%"><span style="float:right;">380</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="55" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STEREO (MINI-COMPONENT W/ VCD)</td>
								<td width="10%"><span style="float:right;">185</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="54" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STEREO (MINI-COMPONENT)</td>
								<td width="10%"><span style="float:right;">145</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="52" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STEREO (SOLID STATE)</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="59" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STOVE (10"  COIL OR HOT PLATE)</td>
								<td width="10%"><span style="float:right;">2900</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="56" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STOVE (6� COIL OR HOT PLATE)</td>
								<td width="10%"><span style="float:right;">1500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="58" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">STOVE (8� COIL OR HOT PLATE)</td>
								<td width="10%"><span style="float:right;">2200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="60" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TAPE RECORDER (CASSETTE)</td>
								<td width="10%"><span style="float:right;">50</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="61" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TURBO BROILER</td>
								<td width="10%"><span style="float:right;">1000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="62" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (B&W 12")</td>
								<td width="10%"><span style="float:right;">32</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="63" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (B&W 14")</td>
								<td width="10%"><span style="float:right;">36</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="64" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (B&W 16')</td>
								<td width="10%"><span style="float:right;">40</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="65" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (B&W 20')</td>
								<td width="10%"><span style="float:right;">55</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="66" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 12")</td>
								<td width="10%"><span style="float:right;">65</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="67" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 14")</td>
								<td width="10%"><span style="float:right;">80</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="69" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 16")</td>
								<td width="10%"><span style="float:right;">85</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="71" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COlOR 20')</td>
								<td width="10%"><span style="float:right;">110</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="72" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 26")</td>
								<td width="10%"><span style="float:right;">130</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="73" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 27")</td>
								<td width="10%"><span style="float:right;">135</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="74" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 29")</td>
								<td width="10%"><span style="float:right;">145</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="75" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 32")</td>
								<td width="10%"><span style="float:right;">160</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="76" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET (COLOR 42')</td>
								<td width="10%"><span style="float:right;">210</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="70" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">TV SET( COLOR 18")</td>
								<td width="10%"><span style="float:right;">90</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="77" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VACUUM CLEANER</td>
								<td width="10%"><span style="float:right;">800</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="78" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VCD PLAYER</td>
								<td width="10%"><span style="float:right;">45</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="80" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VENDO, SOFTDRINK (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">140</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="85" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VIDEO GAME MACHINE (14"TV) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">125</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="84" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VIDEO GAME MACHINE (21"TV) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">155</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="83" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VIDEO MACHINE (14"TV) KARAOKE</td>
								<td width="10%"><span style="float:right;">225</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="82" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VIDEO MACHINE (21"TV) KARAOKE</td>
								<td width="10%"><span style="float:right;">255</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="81" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">VIDEO MACHINE (29"TV) KARAOKE</td>
								<td width="10%"><span style="float:right;">290</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="87" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WASHING MACHINE (AUTOMATIC)</td>
								<td width="10%"><span style="float:right;">585</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="88" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WASHING MACHINE (AUTOMATIC, 7KG)</td>
								<td width="10%"><span style="float:right;">1150</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="86" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WASHING MACHINE (NON-AUTOMATIC)</td>
								<td width="10%"><span style="float:right;">280</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="91" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER DISPENSER, HOT & COLD</td>
								<td width="10%"><span style="float:right;">500</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="89" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER DISPENSER,COLD</td>
								<td width="10%"><span style="float:right;">100</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="92" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER FilTER/PURIFIER</td>
								<td width="10%"><span style="float:right;">16</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="93" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER HEATER</td>
								<td width="10%"><span style="float:right;">3000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="94" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER HEATER (INSTANT, PORTABLE)</td>
								<td width="10%"><span style="float:right;">1600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="97" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER PUMP (0.5 HP)COMM'L USE</td>
								<td width="10%"><span style="float:right;">373</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="98" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER PUMP (1.0 HP) COMM'L USE</td>
								<td width="10%"><span style="float:right;">746</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="95" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER PUMP (AUTOMATIC, 0.5 HP)</td>
								<td width="10%"><span style="float:right;">373</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="96" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WATER PUMP (AUTOMATIC, 1.0 HP)</td>
								<td width="10%"><span style="float:right;">746</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="100" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (100A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">4000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="102" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (150A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">5600</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="103" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (200A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">8000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="104" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (250A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">10200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="105" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (300A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">13000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="106" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (400A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">17300</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="107" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (500A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">20000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="99" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">WELDING MACHINE (50A) (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">2000</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="108" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">X-RAY MACHINE (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">16200</span></td>
							</tr>
														<tr>
								<td width="5%"><input name="checkbox[]" type="checkbox" id="checkbox" value="109" /> </td>
								<!--<td width="30%"><input type="hidden" name="unitcode" value=""/></td>-->
								<td width="55%">XEROX MACHINE (COMMERCIAL)</td>
								<td width="10%"><span style="float:right;">250</span></td>
							</tr>
													</tbody>
					</table>
				</div><!-- end div scroll table-->
			</div><!-- end div table-->
			<div align="center" style="padding-bottom:5px; margin-top:3px;">
				<input class="classname" type="submit" value="OK" /> 
			</div>
		</form>
	</div> <!--end div content-->
</body>
</html>