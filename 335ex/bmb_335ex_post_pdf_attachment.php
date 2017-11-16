<?php
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$catalog = '';
$address = '';
$apartment = '';
$city = '';
$state = '';
$post_code = '';
$country = '';
$date = '';
$area = '';
$referred_by = '';
$comments = '';
$color = '';
$bait_freezer = '';
$cushion_color = '';
$engine = '';
$bow_rail = '';
$steering_system = '';
$console_seat = '';
$jump_seat = '';
$outrigger = '';
$folding_seat = '';
$cockpit_stereo = '';
$cockpit_cover = '';
$top = '';
$ski_pylon = '';
$trailer = '';
$painted_engine = '';
$windlass = '';
$garmin_0 = '';
$garmin_1 = '';
$garmin_2 = '';
$garmin_3 = '';
$garmin_4 = '';
$garmin_5 = '';
$garmin_6 = '';
$garmin_7 = '';
$garmin_8 = '';
$garmin_9 = '';
$garmin_10 = '';
$garmin_11 = '';
$garmin_12 = '';
$transducers_0 = '';
$transducers_1 = '';
$transducers_2 = '';
$getoptions_0 = '';
$getoptions_1 = '';
$getoptions_2 = '';
$getoptions_3 = '';
$getoptions_4 = '';
$getoptions_5 = '';
$getoptions_6 = '';
$getoptions_7 = '';

if (count($xmldata)){ 
   foreach ($xmldata as $data) {
      $value = nl2br(htmlentities(substr(is_array($data[_FF_DATA_VALUE]) ? implode('|',$data[_FF_DATA_VALUE]) : $data[_FF_DATA_VALUE],0,10000), ENT_QUOTES, 'UTF-8'));
	  /* IF VALUE IS EMPTY CHANGE TO STANDARD */
	  //if (!$value || $value == "") { $value = "Standard"; }
      switch($data[_FF_DATA_NAME]){
        case 'first_name':
          $first_name = $value;
          break;
		case 'last_name':
          $last_name = $value;
          break;
		case 'email':
          $email = $value;
          break;
		case 'phone':
          $phone = $value;
          break;
		case 'catalog':
          $catalog = $value;
          break;
		case 'address':
          $address = $value;
          break;
		case 'apartment':
          $apartment = $value;
          break;
		case 'city':
          $city = $value;
          break;
		case 'state':
          $state = $value;
          break;
    case 'post_code':
          $post_code = $value;
          break;
		case 'country':
          $country = $value;
          break;
    case 'date':
          $date = $value;
          break;
    case 'area':
          $area = $value;
          break;
    case 'referred_by':
          $referred_by = $value;
          break;
    case 'comments':
          $comments = $value;
          break;
		case 'color':
          $color = $value;
          break;
    case 'bait_freezer':
          $bait_freezer = $value;
          break;
    case 'cushion_color':
          $cushion_color = $value;
          break;
    case 'engine':
          $engine = $value;
          break;
    case 'jump_seat':
          $jump_seat = $value;
          break;
    case 'bow_rail':
          $bow_rail = $value;
          break;
    case 'steering_system':
          $steering_system = $value;
          break;
    case 'console_seat':
          $console_seat = $value;
          break;
    case 'outrigger':
          $outrigger = $value;
          break;
    case 'folding_seat':
          $folding_seat = $value;
          break;
    case 'cockpit_stereo':
          $cockpit_stereo = $value;
          break;
    case 'cockpit_cover':
          $cockpit_cover = $value;
          break;
    case 'top':
          $top = $value;
          break;
    case 'ski_pylon':
          $ski_pylon = $value;
          break;
    case 'trailer':
          $trailer = $value;
          break;
    case 'painted_engine':
          $painted_engine = $value;
          break;
    case 'windlass':
          $windlass = $value;
          break;
    case 'garmin_0':
          $garmin_0 = $value;
          break;
    case 'garmin_1':
          $garmin_1 = $value;
          break;
    case 'garmin_2':
          $garmin_2 = $value;
          break;
    case 'garmin_3':
          $garmin_3 = $value;
          break;
    case 'garmin_4':
          $garmin_4 = $value;
          break;
    case 'garmin_5':
          $garmin_5 = $value;
          break;
    case 'garmin_6':
          $garmin_6 = $value;
          break;
    case 'garmin_7':
          $garmin_7 = $value;
          break;
    case 'garmin_8':
          $garmin_8 = $value;
          break;
    case 'garmin_9':
          $garmin_9 = $value;
          break;
    case 'garmin_10':
          $garmin_10 = $value;
          break;
    case 'garmin_11':
          $garmin_11 = $value;
          break;
    case 'garmin_12':
          $garmin_12 = $value;
          break;
    case 'transducers_0':
          $transducers_0 = $value;
          break;
    case 'transducers_1':
          $transducers_1 = $value;
          break;
    case 'transducers_2':
          $transducers_2 = $value;
          break;
    case 'getoptions_0':
          $getoptions_0 = $value;
          break;
    case 'getoptions_1':
          $getoptions_1 = $value;
          break;
    case 'getoptions_2':
          $getoptions_2 = $value;
          break;
    case 'getoptions_3':
          $getoptions_3 = $value;
          break;
    case 'getoptions_4':
          $getoptions_4 = $value;
          break;
    case 'getoptions_5':
          $getoptions_5 = $value;
          break;
    case 'getoptions_6':
          $getoptions_6 = $value;
          break;
    case 'getoptions_7':
          $getoptions_7 = $value;
          break;
      }
    }
}


/* REPLACE BOAT IMAGE DEPENDING ON COLOR */
if (stripos($color, "cabernet") !== false) { 
 $img_file = "335ex-cabernet.jpg"; 
} elseif (stripos($color, "fighting") !== false) { 
 $img_file = "335ex-fighting-lady-yellow.jpg"; 
} elseif (stripos($color, "ice") !== false) { 
 $img_file = "335ex-ice-blue.jpg"; 
} elseif (stripos($color, "midnight") !== false) { 
 $img_file = "335ex-midnight-blue.jpg";
} elseif (stripos($color, "olive") !== false) { 
 $img_file = "335ex-olive-green.jpg";
} elseif (stripos($color, "pewter") !== false) { 
 $img_file = "335ex-pewter.jpg";
} elseif (stripos($color, "seafoam") !== false) { 
 $img_file = "335ex-sea-foam-green.jpg";
} elseif (stripos($color, "barth") !== false) { 
 $img_file = "335ex-st-barths-blue.jpg";
} elseif (stripos($color, "stars") !== false) { 
 $img_file = "335ex-stars-stripes-blue.jpg";
} elseif (stripos($color, "irish") !== false) { 
 $img_file = "335ex-irish-cream.jpg";
} else { 
 $img_file = "335ex-standard-white.jpg"; 
}


/* CONVERT NAME TO UPPERCASE */
$first_name = strtoupper($first_name);
$last_name = strtoupper($last_name);
 


?>




<!-- HTML STARTS HERE! -->
<table cellspacing="4" align="center">
<tr>
  <td><img src="templates/edgewaterboats/images/pdf-logo.jpg" height="79px" width="250px"/></td>
</tr>
<tr>
<!-- "img_file" REPLACES BOAT IMAGE DEPENDING ON "color" title -->
  <td><img src="images/335ex/pdf/<?php echo $img_file; ?>" width="450px" height="266px"/></td>
</tr>
<tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="14">MY EDGEWATER 335EX Deep-V Express<br />
  BUILT FOR: <?php echo $first_name; ?> <?php echo $last_name; ?> ON <?php echo $date; ?></font></strong></td>
</tr>
<tr>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="12"><?php echo $address; ?> <?php echo $apartment; ?> <?php echo $city; ?>, <?php echo $state; ?> <?php echo $post_code; ?> <?php echo $country; ?><br />
  PHONE: <?php echo $phone; ?> EMAIL: <?php echo $email; ?></font></td>
</tr>
</table>

<font size="8"><br /></font>

<table>
<tr>
 <td width="40%">
  <table width="98%" bgcolor="#004E8E" cellpadding="33px"><!-- PADDING SHOULD BE 20 -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="20">EWBOATS.COM    <!-- (TXT SIZE SHOULD BE 36) $<?php echo $amount; ?> --></font></strong></td>
  </tr>
  </table>
 </td>
<td width="60%" bgcolor="#dcdddf">
<font size="4"><br /></font>
	<table width="97%" align="center" cellpadding="14px">
	<tr>
  <td width="45%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">LENGTH: <strong>32'6" | 9.9m</strong><br />
  BEAM: <strong>11'2" | 3.4m</strong><br />
  DRAFT: <strong>25" | 63.5cm</strong><br />
  MAX POWER: <strong>700hp | 525kw</strong></font></td>
  <td width="55%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">WEIGHT: <strong>12900lbs | 5851kg</strong><br />
  FUEL CAPACITY: <strong>280gal | 1060L</strong><br />
  COCKPIT AREA: <strong>115sq.ft. | 10.7m2</strong><br />
  TRANSFORM HEIGHT: <strong>Twin-30"</strong></font></td>
    </tr>
   </table>
 </td> 
</tr>
</table>
<!-- PRICE SUBJECT TO CHANGE AND BASE PRICE
<font size="2"><br /></font>
<table>
<tr>
<td width="70%" alight="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="8">PRICE AS BUILT: Subject to Change Depending on Dealer Fees, Freight, Options, Etc.</font></td>
<td width="30%" align="right"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">$<?php echo $pdf_base_price; ?></strong></font></td>
</tr>
</table>

<font size="3"><br /></font> -->

<font size="7"><br /></font> <!-- REMOVE ONCE PRICING IS ADDED -->

<table>
<tr>
<td width="48%" valign="top">
   <table cellpadding="5px">
	<tr>
	<!-- OPTIONS SELECTED BY USER -->
    <td bgcolor="#004E8E"><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="14">&nbsp;My Options</font></strong></td>
	</tr>
	</table>
	
	<table>
	<tr>
	<!-- COLORS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">COLORS</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      HULL SIDE: <?php echo $color; ?>
    </font></td>
	</tr>
	<tr>
	<!-- ENGINES -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ENGINES</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($engine)) {echo $engine . '<br />';} ?>
      <?php echo $painted_engine; ?>
    </font></td>
	</tr>
  <tr>
  <!-- STEERING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">STEERING</font></strong></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($steering_system)) {echo $steering_system . '<br />';} ?>
    </font></td>
  </tr>
  <tr>
	<!-- TOPS AND COVERS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">TOPS AND COVERS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($top)) {echo $top . '<br />';} ?>
      <?php if (!empty($cockpit_cover)) {echo $cockpit_cover . '<br />';} ?>
      <?php echo $outrigger; ?>
    </font></td>
	</tr>
	<tr>
	<!-- RUBRAIL -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">BOW RAIL</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $bow_rail; ?>
    </font></td>
	</tr>
	<tr>
  <!-- SEATING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING</font></strong></td>
  </tr>
  <tr>
     <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($jump_seat)) {echo $jump_seat . '<br />';} ?>
      <?php if (!empty($console_seat)) {echo $console_seat . '<br />';} ?>
      <?php if (!empty($folding_seat)) {echo $folding_seat . '<br />';} ?>
      <?php echo $cushion_color; ?>
    </font></td>
  </tr>
  <tr>
	<!-- ELECTRONICS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRONICS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($garmin_0)) {echo $garmin_0 . '<br />';} ?>
      <?php if (!empty($garmin_1)) {echo $garmin_1 . '<br />';} ?>
      <?php if (!empty($garmin_2)) {echo $garmin_2 . '<br />';} ?>
      <?php if (!empty($garmin_3)) {echo $garmin_3 . '<br />';} ?>
      <?php if (!empty($garmin_4)) {echo $garmin_4 . '<br />';} ?>
      <?php if (!empty($garmin_5)) {echo $garmin_5 . '<br />';} ?>
      <?php if (!empty($garmin_6)) {echo $garmin_6 . '<br />';} ?>
      <?php if (!empty($garmin_7)) {echo $garmin_7 . '<br />';} ?>
      <?php if (!empty($garmin_8)) {echo $garmin_8 . '<br />';} ?>
      <?php if (!empty($garmin_9)) {echo $garmin_9 . '<br />';} ?>
      <?php if (!empty($garmin_10)) {echo $garmin_10 . '<br />';} ?>
      <?php if (!empty($garmin_11)) {echo $garmin_11 . '<br />';} ?>
      <?php if (!empty($garmin_12)) {echo $garmin_12 . '<br />';} ?>
      <?php if (!empty($transducers_0)) {echo $transducers_0 . '<br />';} ?>
      <?php if (!empty($transducers_1)) {echo $transducers_1 . '<br />';} ?>
      <?php if (!empty($transducers_2)) {echo $transducers_2 . '<br />';} ?>
      <?php echo $cockpit_stereo; ?>
    </font></td>
	</tr>
	<tr>
	<!-- ACCESSORIES -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ACCESSORIES</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($getoptions_0)) {echo $getoptions_0 . '<br />';} ?>
      <?php if (!empty($getoptions_1)) {echo $getoptions_1 . '<br />';} ?>
      <?php if (!empty($getoptions_2)) {echo $getoptions_2 . '<br />';} ?>
      <?php if (!empty($getoptions_3)) {echo $getoptions_3 . '<br />';} ?>
      <?php if (!empty($getoptions_4)) {echo $getoptions_4 . '<br />';} ?>
      <?php if (!empty($getoptions_5)) {echo $getoptions_5 . '<br />';} ?>
      <?php if (!empty($getoptions_6)) {echo $getoptions_6 . '<br />';} ?>
      <?php if (!empty($getoptions_7)) {echo $getoptions_7 . '<br />';} ?>
      <?php if (!empty($windlass)) {echo $windlass . '<br />';} ?>
      <?php if (!empty($bait_freezer)) {echo $bait_freezer . '<br />';} ?>
      <?php echo $trailer; ?>
    </font></td>
	</tr>
    </table>  
</td>

<td width="2%"></td>

<td width="2%" valign="top" align="center">
<table width="1px" bgcolor="#dcdddf">
<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
</table>
</td>

<td width="48%" valign="top">
   <table cellpadding="5px">
  <tr>
  <!-- STANDARD FEATURES -->
    <td bgcolor="#004E8E"><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="14">&nbsp;Standard Features</font></strong></td>
  </tr>
  </table>
  
  <table>
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSTRUCTION</font></strong><br />
  
  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Single Piece Infusion (SPI) Structural System<br />
  Limited Lifetime Structural Hull Warranty<br />
  NMMA, ABYC & CE Certified<br />
  Self Bailing Non-Skid Decks<br />
  NO WOOD All Composite Construction<br />
  Closed-Cell Foam Flotation<br />
  Variable Deadrise Deep V Hull<br />
  High Density Composite Transom</font></td>
  </tr>

  <!-- HARDWARE -->  
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">HARDWARE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Freshwater System w/ 39 Gallon Tank<br />
Cockpit Fiberglass Generator & Bilge Access Hatches<br />
8kW Panda Diesel Generator w/ 21 Gallon Fuel Tank<br />
Removable Armstrong Transom Boarding Ladder<br />
Walk-Thru Transom Door w/ Stainless Steel Latch<br />
Aluminum Transom Mount Rod Holders (4)<br />
Transom Shore Power Cord Storage Drawer<br />
Stainless Steel Bow and Stern Eyes (3)<br />
Stainless Steel Bow Rail<br />
10" Stainless Steel Bow/Springline Cleats (4ea)<br />
10" Stainless Steel Under Gunwale Cockpit Cleats (4)<br />
Stainless Steel Cockpit Fender Cleats (4)<br />
Bomar® 24" x 24" SS Hatch Over V-Berth<br />
Bomar® 12" x 12" SS Hatches (2) Over Galley & Dinette<br />
Bomar® SS Portlights w/ Screens (4)<br />
Fire Extinguishers (3)</font></td>
  </tr>

  <!-- CONSOLE & TOPS -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSOLE AND TOP</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Fiberglass Hardtop w/ Electronics Boxes (2), Rod Holders (8)<br />
Custom Tempered Glass Windshield w/ Center Power Vent & White Powdercoated Aluminum Frame<br />
Hydraulic Seastar® Steering w/ Tilt Helm<br />
Seastar® Tournament Series Hydraulic Steering Cylinder (2)<br />
Edson® Stainless Steel Steering Wheel w/ Power Knob<br />
Ritchie Compass<br />
Folding Aluminum Helm Footrests (2)<br />
Integrated Starboard Helm Footrest<br />
500QT Cockpit In-Floor Fishbox w/ Pumpout<br />
180QT Transom Cooler w/ Overboard Drain<br />
Port Transom 28 Gallon Baitwell<br />
Port Prep Station 45 Gallon Baitwell w/ Cutting Board<br />
Pull-Out Starboard Prep Station 120V Electric Grill<br />
Transom Sink w/ Pull-Out Fresh Water Shower</font></td>
  </tr>
  
  <!-- CABIN -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CABIN</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Locking Slider Cabin Door w/ Vent Screen<br />
Entry Door w/ Smoked Plexiglass Cover<br />
Fiberglass Cabin Headliner<br />
Integral Shade/Screens in Overhead Bomar Hatches (3)<br />
Corian® Galley Countertop w/ Removable Trash Can, Stainless Steel Sink w/ Cover Cutting Board<br />
Wood Laminate Galley Cabinets w/ Dishracks<br />
V-Berth w/ Flip-Up Extender, Backrests, Storage Bins, Drink Holders, Mattress, Cover & Pillows<br />
Dinette Area w/ Pop-Up Wood Table, Converts to a Single Berth w/ Flip-up Backrest & Filler Cushion<br />
Dinette Under Seat Storage Compartment<br />
Wood Laminate Dinette Storage Cabinets<br />
Aft Cabin Convertible Double Berth/U-Shaped Lounge<br />
Aft Cabin Rod Storage Racks (6)<br />
Aft Cabin Cedar Lined Hanging Locker<br />
Aft Cabin Port Storage Bins (2)<br />
Enclosed Head Compartment w/ Wood Laminate Enclosure<br />
Full Length Mirror on Inside of Head Door<br />
Corian® Head Countertop w/ SS Sink, Faucet & Soap Dispenser<br />
Head Storage Drawers w/ Flip-Up Vanity Mirror<br />
Upper Head Storage Compartments w/ Portlight<br />
Adjustable Height Stand Up Shower<br />
Durable Teak Look No-Slip Flooring<br />
Main 120V and Generator Control Panels at Cabin<br />
LED Overhead Cabin Lighting<br />
Blue Indirect LED Accent and Step Lighting<br />
LED Reading Lights in Aft Berth, Dinette & V-Berth<br />
12000 BTU Air Conditioner w/ Digital Controller<br />
Single Burner Flush Cooktop w/ Pop-up Potholders<br />
Microwave Oven<br />
Stainless Steel Galley Refrigerator<br />
4 Bottle Galley Wine Chiller</font></td>
  </tr>

  <!-- ELECTRICAL SYSTEM -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRICAL SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">LED Cockpit/Livewell Lighting<br />
LED Navigation Lights<br />
LED Spreader Lights (3), 4-Color LED Overhead Lights (6), LED Work Lights (2), Full Weather Curtain Set<br />
LED Blue Underwater Lights (2)<br />
2200 GPH Auto/Manual Bilge Pump Aft (2)<br />
1000 GPH Auto/Manual Bilge Pump Midship (1)<br />
Twin Engine Ready Fuel & Electrical Systems<br />
Side Power® SE60 Electric Bow Thruster w/ Console Joystick (without Helm Master)<br />
SS Anchor Windlass w/ 200" Rode-15' Chain<br />
Electric Head w/ Holding Tank, Overboard Discharge<br />
Dockside Pumpout & Cover w/ Cushion<br />
800GPH Shower Sump w/ Overboard Discharge<br />
Heavy Duty Windshield Wipers w/ Fresh Water Sprayers (2)<br />
Helm Switch Panels w/ Waterproof Switches<br />
Helm 12V Main Breaker Panel w/ Voltmeters<br />
Lockable Cockpit Battery Switch Panel Compartment<br />
House/Engine Battery System w/ On-Off Switches (3), Battery Isolator & Console Parallel Switch<br />
Battery Charger (3 Bank)<br />
Port Side Prep Station Switch Panel for Pumps & Lights<br />
Waterproof Electrical Connectors & Tin-Plated Copper Wiring<br />
Aft Bilge Locker Lighting<br />
Starboard Prep Station w/ Locking Drawer Storage<br />
4.2 Gallon 120V Water Heater<br />
12000BTU Cockpit Air Conditioner w/ Digital Controller<br />
Stainless Steel Cockpit Refrigerator<br />
Lenco® Recessed Electric Trim Tabs w/ Indicators</font></td>
  </tr>

  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING / STORAGE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Heavy-Duty Marine Grade UV Resistant Vinyl Upholstery<br />
Fiberglass Back Flip-Bolster 36" Helm Seats w/ Folding Armrests<br />
Flush Folding Port Aft Facing Cockpit Seat<br />
Flush Folding Stern Bench Seat w/ Backrest<br />
Locking Port Side Helm Storage Compartment<br />
Starboard Walkway Storage Drawer<br />
Drink Holders at All Seating Locations</font></td>
    </tr>
  
  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ANCHOR SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Stainless Steel 22LB Anchor w/ Swivel<br />
Bow Anchor Locker w/ Overboard Drain<br />
Bow Pulpit w/ SS Anchor Roller w/ 8" SS Cleat & Anchor Retainer<br />
Stainless Steel Hull Anchor Chafe Plate<br />
Concealed SS Anchor Windlass w/ 200' Rode-15' Chain<br />
Rope Locker w/ Pull-out Fresh Water Washdown</font></td>
    </tr>
  </table>
  </td>
</tr>
</table>