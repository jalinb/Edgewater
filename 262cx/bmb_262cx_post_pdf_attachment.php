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
$painted_engine = '';
$cushion_color = '';
$engine = '';
$rubrail = '';
$outrigger = '';
$steering_system = '';
$folding_seating = '';
$prep_station = '';
$transom_rod_holders = '';
$toe_rail = '';
$cleats = '';
$t_top_rod_holders = '';
$enclosure = '';
$aft_curtain = '';
$bow_cover = '';
$bow_rail = '';
$top = '';
$ski_pylon = '';
$trailer = '';
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
$garmin_13 = '';
$garmin_14 = '';
$garmin_15 = '';
$garmin_16 = '';
$garmin_17 = '';
$transducers_0 = '';
$transducers_1 = '';
$transducers_2 = '';
$transducers_3 = '';
$transducers_4 = '';
$transducers_5 = '';
$getoptions_0 = '';
$getoptions_1 = '';
$getoptions_2 = '';
$getoptions_3 = '';
$getoptions_4 = '';
$getoptions_5 = '';
$getoptions_6 = '';
$getoptions_7 = '';
$getoptions_8 = '';
$getoptions_9 = '';
$getoptions_10 = '';

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
    case 'painted_engine':
          $painted_engine = $value;
          break;
    case 'cushion_color':
          $cushion_color = $value;
          break;
    case 'engine':
          $engine = $value;
          break;
    case 'transom_rod_holders':
          $transom_rod_holders = $value;
          break;
    case 'rubrail':
          $rubrail = $value;
          break;
    case 'steering_system':
          $steering_system = $value;
          break;
    case 'folding_seating':
          $folding_seating = $value;
          break;
    case 'prep_station':
          $prep_station = $value;
          break;
    case 'toe_rail':
          $toe_rail = $value;
          break;
    case 'cleats':
          $cleats = $value;
          break;
    case 'outrigger':
          $outrigger = $value;
          break;
    case 't_top_rod_holders':
          $t_top_rod_holders = $value;
          break;
    case 'enclosure':
          $enclosure = $value;
          break;
    case 'aft_curtain':
          $aft_curtain = $value;
          break;
    case 'bow_cover':
          $bow_cover = $value;
          break;
    case 'bow_rail':
          $bow_rail = $value;
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
          $garmin_7 = $value;
          break;
    case 'garmin_12':
          $garmin_7 = $value;
          break;
    case 'garmin_13':
          $garmin_13 = $value;
          break;
    case 'garmin_14':
          $garmin_14 = $value;
          break;
    case 'garmin_15':
          $garmin_15 = $value;
          break;
    case 'garmin_16':
          $garmin_16 = $value;
          break;
    case 'garmin_17':
          $garmin_17 = $value;
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
    case 'transducers_3':
          $transducers_3 = $value;
          break;
    case 'transducers_4':
          $transducers_4 = $value;
          break;
    case 'transducers_5':
          $transducers_5 = $value;
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
    case 'getoptions_8':
          $getoptions_8 = $value;
          break;
      }
    }
}


/* REPLACE BOAT IMAGE DEPENDING ON COLOR */
if (stripos($color, "cabernet") !== false) { 
 $img_file = "262cx-cabernet.jpg"; 
} elseif (stripos($color, "fighting") !== false) { 
 $img_file = "262cx-fighting-lady-yellow.jpg"; 
} elseif (stripos($color, "ice") !== false) { 
 $img_file = "262cx-ice-blue.jpg"; 
} elseif (stripos($color, "midnight") !== false) { 
 $img_file = "262cx-midnight-blue.jpg";
} elseif (stripos($color, "olive") !== false) { 
 $img_file = "262cx-olive-green.jpg";
} elseif (stripos($color, "pewter") !== false) { 
 $img_file = "262cx-pewter.jpg";
} elseif (stripos($color, "foam") !== false) { 
 $img_file = "262cx-sea-foam-green.jpg";
} elseif (stripos($color, "barth") !== false) { 
 $img_file = "262cx-st-barths-blue.jpg";
} elseif (stripos($color, "stars") !== false) { 
 $img_file = "262cx-stars-stripes-blue.jpg";
} elseif (stripos($color, "irish") !== false) { 
 $img_file = "262cx-irish-cream.jpg";
} elseif (stripos($color, "marlin") !== false) { 
 $img_file = "262cx-marlin-blue.jpg";
} else { 
 $img_file = "262cx-standard-white.jpg"; 
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
  <td><img src="images/262cx/pdf/<?php echo $img_file; ?>" width="450px" height="266px"/></td>
</tr>
<tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="14">MY EDGEWATER 262CX DUAL CONSOLE<br />
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
  <td width="44%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">LENGTH: <strong>26'5" | 8.2m</strong><br />
  BEAM: <strong>9'3" | 2.8m</strong><br />
  DRAFT: <strong>21" | 53.3cm</strong><br />
  MAX POWER: <strong>500hp | 375kw</strong></font></td>
  <td width="56%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">WEIGHT: <strong>5750lbs | 2608kg</strong><br />
  FUEL CAPACITY: <strong>163gal | 617L</strong><br />
  COCKPIT AREA: <strong>61sq.ft. | 5.7m2</strong><br />
  TRANSFORM HEIGHT: <strong>Twin-25"</strong></font></td>
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
      <?php echo $prep_station; ?>
    </font></td>
  </tr>
  <tr>
	<!-- TOPS AND COVERS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">TOPS AND COVERS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($top)) {echo $top . '<br />';} ?>
      <?php if (!empty($bow_cover)) {echo $bow_cover . '<br />';} ?>
      <?php if (!empty($bow_rail)) {echo $bow_rail . '<br />';} ?>
      <?php if (!empty($toe_rail)) {echo $toe_rail . '<br />';} ?>
      <?php if (!empty($t_top_rod_holders)) {echo $t_top_rod_holders . '<br />';} ?>
      <?php if (!empty($transom_rod_holders)) {echo $transom_rod_holders . '<br />';} ?>
      <?php if (!empty($outrigger)) {echo $outrigger . '<br />';} ?>
      <?php if (!empty($enclosure)) {echo $enclosure . '<br />';} ?>
      <?php if (!empty($aft_curtain)) {echo $aft_curtain . '<br />';} ?>
      <?php echo $cleats; ?>
    </font></td>
	</tr>
	<tr>
	<!-- RUBRAIL -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">RUBRAIL</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $rubrail; ?>
    </font></td>
	</tr>
	<tr>
  <!-- SEATING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING</font></strong></td>
  </tr>
  <tr>
     <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($folding_seating)) {echo $folding_seating . '<br />';} ?>
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
      <?php if (!empty($garmin_13)) {echo $garmin_13 . '<br />';} ?>
      <?php if (!empty($garmin_14)) {echo $garmin_14 . '<br />';} ?>
      <?php if (!empty($garmin_15)) {echo $garmin_15 . '<br />';} ?>
      <?php if (!empty($garmin_16)) {echo $garmin_16 . '<br />';} ?>
      <?php if (!empty($garmin_17)) {echo $garmin_17 . '<br />';} ?>
      <?php if (!empty($transducers_0)) {echo $transducers_0 . '<br />';} ?>
      <?php if (!empty($transducers_1)) {echo $transducers_1 . '<br />';} ?>
      <?php if (!empty($transducers_2)) {echo $transducers_2 . '<br />';} ?>
      <?php if (!empty($transducers_3)) {echo $transducers_3 . '<br />';} ?>
      <?php if (!empty($transducers_4)) {echo $transducers_4 . '<br />';} ?>
      <?php if (!empty($transducers_5)) {echo $transducers_5;} ?>
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
      <?php if (!empty($getoptions_8)) {echo $getoptions_8 . '<br />';} ?>
      <?php if (!empty($trailer)) {echo $trailer . '<br />';} ?>
      <?php echo $ski_pylon; ?>
    </font></td>
	</tr>
    </table>  
</td>

<td width="2%"></td>

<td width="2%" valign="top" align="center">
<table width="1px" bgcolor="#dcdddf">
<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
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
NMMA, ABYC &amp; CE Certified<br />
Self Bailing Non-Skid Decks<br />
NO WOOD All Composite Construction<br />
Closed-Cell Foam Flotation<br />
Variable Deadrise Deep V Hull<br />
High Density Composite Transom<br />
White Gelcoat Hull Color</font></td>
  </tr>

  <!-- HARDWARE -->  
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">HARDWARE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Walk-thru Transom Door w/ SS Latch<br />
Starboard Side Dive Door w/ Stainless Steel Latch<br />
Folding Transom Boarding Ladder<br />
Welded 316L Stainless Steel Recessed Bow Rail<br />
Heavy Duty White Rubrail w/ Black Insert<br />
Stainless Steel Gunwale Mounted Rod Holders (4)<br />
Stainless Steel Bow and Stern Eyes (3)<br />
10" Stainless Steel Cleats (6)<br />
Transom Mount Rod Holders (4)<br />
Fire Extinguishers (2)</font></td>
  </tr>

  <!-- CONSOLE & TOPS -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSOLE AND TOP</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10"><?php echo $hardtop_standard ?><br />
    White Powdercoated Fiberglass Hardtop w/ LED Spreader Lights (2) &amp; Electronics Box<br />
Port Console Storage Compartment<br />
Starboard Walk-in Console<br />
Freshwater Sink w/ Pull-out Shower &amp; Corian® Countertop<br />
Electric Fresh Water Head w/19 Gallon Reservoir, Overboard Discharge &amp; Pumpout<br />
Wood Laminate Storage Cabinets in Head Compartment<br />
Custom Tempered Glass Frameless Windshield<br />
Deluxe Stainless Steel Steering Wheel w/ Power Knob<br />
Hydraulic Seastar® Steering w/ Tilt Helm<br />
Ritchie Compass<br />
Under Gunwale Rod Racks<br />
Stainless Steel Cockpit Toe Railsv<br />
Stainless Steel Gunwale Mounted Cup Holder/Rod Holders (4)<br />
Canvas Bow &amp; Cockpit Covers</font></td>
  </tr>

  <!-- ELECTRICAL SYSTEM -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRICAL SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">LED Cockpit/Livewell Lighting<br />
LED Navigation Lights<br />
Underwater Blue LED Lights (2)<br />
1250 GPH Auto/Manual Bilge Pump (1)<br />
Console Switch Panel w/ Waterproof Switches, Circuit breakers &amp; 12V Outlet<br />
Waterproof Electrical Connectors &amp; Tin-Plated Copper Wiring<br />
Battery Selector Switch &amp; Wiring for Dual Batteries<br />
Transom Freshwater Shower<br />
Raw Water Washdown Outlet<br />
Lenco® Recessed Electric Trim Tabs w/ Indicators</font></td>
  </tr>

  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING / STORAGE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Heavy-Duty Marine Grade UV Resistant Vinyl Upholstery<br />
Folding Stern Seat w/ Backrest<br />
Deluxe Adjustable Double Wide Helm Seat with Bolster<br />
Starboard Side Prep Station w/ Fresh Water Sink, Insulated Storage &amp; Sliding 50QT Premium Cooler<br />
Port Side Ultra Lounger with Insulated Storage<br />
Bow Lounge Seating w/Armrests w/ Filler &amp; Table Leg<br />
Insulated Bow Fishbox/Coolers (3) w/ Overboard Drains<br />
28 Gallon Transom Baitwell<br />
Starboard Side Console Storage Compartment<br />
In-Floor Storage/Ski Locker<br />
Drink Holders at All Seat Locations</font></td>
    </tr>
  
  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ANCHOR SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Bow Anchor Locker w/ Overboard Drain<br />
SS Anchor Roller w/ 8" SS Cleat &amp; Anchor Retainer<br />
Electric SS Anchor Windlass w/ 200' Rode-15' Chain</font></td>
    </tr>
  </table>
  </td>
</tr>
</table>