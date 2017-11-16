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
$engine = '';
$cabin_interior = '';
$rubrail = '';
$steering_system = '';
$seating = '';
$backrest_rodholders = '';
$bow_rail = '';
$top = '';
$lighting = '';
$pfd_storage = '';
$outrigger = '';
$painted_engine = '';
$trailer = '';
$anchor = '';
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
$garmin_9 = '';
$garmin_10 = '';
$garmin_11 = '';
$garmin_12 = '';
$garmin_13 = '';
$garmin_14 = '';
$garmin_15 = '';
$transducers_0 = '';
$transducers_1 = '';
$transducers_2 = '';
$getoptions_0 = '';
$getoptions_1 = '';
$getoptions_2 = '';
$getoptions_3 = '';

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
    case 'engine':
          $engine = $value;
          break;
    case 'cabin_interior':
          $cabin_interior = $value;
          break;
    case 'rubrail':
          $rubrail = $value;
          break;
    case 'steering_system':
          $steering_system = $value;
          break;
    case 'seating':
          $seating = $value;
          break;
    case 'backrest_rodholders':
          $backrest_rodholders = $value;
          break;
    case 'bow_rail':
          $bow_rail = $value;
          break;
    case 'top':
          $top = $value;
          break;
    case 'lighting':
          $lighting = $value;
          break;
		case 'pfd_storage':
          $pfd_storage = $value;
          break;
    case 'outrigger':
          $outrigger = $value;
          break;
    case 'painted_engine':
          $painted_engine = $value;
          break;
    case 'trailer':
          $trailer = $value;
          break;
    case 'anchor':
          $anchor = $value;
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
    case 'garmin_13':
          $garmin_13 = $value;
          break;
    case 'garmin_14':
          $garmin_14 = $value;
          break;
    case 'garmin_15':
          $garmin_15 = $value;
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
      }
    }
}


/* REPLACE BOAT IMAGE DEPENDING ON COLOR */
if (stripos($color, "cabernet") !== false) { 
 $img_file = "368cc-cabernet.jpg"; 
} elseif (stripos($color, "fighting") !== false) { 
 $img_file = "368cc-fighting-lady-yellow.jpg"; 
} elseif (stripos($color, "ice") !== false) { 
 $img_file = "368cc-ice-blue.jpg"; 
} elseif (stripos($color, "midnight") !== false) { 
 $img_file = "368cc-midnight-blue.jpg";
} elseif (stripos($color, "olive") !== false) { 
 $img_file = "368cc-olive-green.jpg";
} elseif (stripos($color, "pewter") !== false) { 
 $img_file = "368cc-pewter.jpg";
} elseif (stripos($color, "seafoam") !== false) { 
 $img_file = "368cc-sea-foam-green.jpg";
} elseif (stripos($color, "barth") !== false) { 
 $img_file = "368cc-st-barths-blue.jpg";
} elseif (stripos($color, "stars") !== false) { 
 $img_file = "368cc-stars-stripes-blue.jpg";
} elseif (stripos($color, "irish") !== false) { 
 $img_file = "368cc-irish-cream.jpg";
} else { 
 $img_file = "368cc-standard-white.jpg"; 
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
  <td><img src="images/368cc/pdf/<?php echo $img_file; ?>" width="450px" height="266px"/></td>
</tr>
<tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="14">MY EDGEWATER 368CC DEEP-V CENTER CONSOLE<br />
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
  <td width="43%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">LENGTH: <strong>36'8" | 11.2m</strong><br />
  BEAM: <strong>11'4" | 3.5m</strong><br />
  DRAFT: <strong>25" | 64cm</strong><br />
  MAX POWER: <strong>900hp | 671kw</strong></font></td>
  <td width="57%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">WEIGHT: <strong>8200lbs | 3720kg</strong><br />
  FUEL CAPACITY: <strong>410gal | 1552.02L</strong><br />
  COCKPIT AREA: <strong>187sq.ft. | 17.3m2</strong><br />
  TRANSOM HEIGHT: <strong>Twin-25" or<br />Center 35"</strong></font></td>
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
  <!-- CABIN INTERIOR & LIGHTING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CABIN INTERIOR &amp; LIGHTING</font></strong></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($cabin_interior)) {echo $cabin_interior . '<br />';} ?>
      <?php echo $lighting; ?>
    </font></td>
  </tr>
	<tr>
	<!-- TOPS AND COVERS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">TOPS AND COVERS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($top)) {echo $top . '<br />';} ?>
      <?php if (!empty($outrigger)) {echo $outrigger . '<br />';} ?>
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
  <!-- BOWRAIL -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">BOW RAIL</font></strong></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $bow_rail; ?>
    </font></td>
  </tr>
	<tr>
	<!-- STEERING SYSTEM -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">STEERING SYSTEM</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $steering_system; ?>
    </font></td>
	</tr>
	<tr>
	<!-- SEATING -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $seating; ?>
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
      <?php if (!empty($transducers_0)) {echo $transducers_0 . '<br />';} ?>
      <?php if (!empty($transducers_1)) {echo $transducers_1 . '<br />';} ?>
      <?php echo $transducers_2; ?>
    </font></td>
	</tr>
	<tr>
	<!-- ACCESSORIES -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ACCESSORIES</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($trailer)) {echo $trailer . '<br />';} ?>
      <?php if (!empty($getoptions_0)) {echo $getoptions_0 . '<br />';} ?>
      <?php if (!empty($getoptions_1)) {echo $getoptions_1 . '<br />';} ?>
      <?php if (!empty($getoptions_2)) {echo $getoptions_2 . '<br />';} ?>
      <?php if (!empty($getoptions_3)) {echo $getoptions_3 . '<br />';} ?>
      <?php if (!empty($anchor)) {echo $anchor . '<br />';} ?>
      <?php echo $pfd_storage; ?>
    </font></td>
	</tr>
    </table>  
</td>

<td width="2%"></td>

<td width="2%" valign="top" align="center">
<table width="1px" bgcolor="#dcdddf">
<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
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

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
Single Piece Infusion (SPI) Structural System<br />
Limited Lifetime Structural Hull Warranty<br />
NMMA, ABYC & CE Certified<br />
Self Bailing Non-Skid Decks<br />
NO WOOD All Composite Construction<br />
Closed-Cell Foam Flotation<br />
Variable Deadrise Deep V Hull<br />
Twin Step Hull Design<br />
High Density Composite Transom</font></td>
  </tr>

  <!-- HARDWARE -->  
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">HARDWARE</font></strong><br />

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
Stainless Steel Bow and Stern Eyes (3)<br />
Welded 316L Stainless Steel Recessed Bow Rail<br />
10" Stainless Steel Under Gunwale Cleats (4)<br />
10" Stainless Steel Flush Pull-Up Cleats (4)<br />
Stainless Steel Gunwale Mounted Rod Holders (6)<br />
Raw Water Washdown Outlet<br />
Transom Prep Station<br />
Transom Pull-Out Fresh Water Shower (Hot & Cold)<br />
Transom Pull-out Boarding Ladder<br />
Fiberglass Port-Side Swim Door<br />
Heavy Duty White Rubrail w/ Stainless Steel Insert<br />
Walk-thru Transom Door w/ SS Latch<br />
Under Gunwale Cockpit Rod Racks<br />
Fire Extinguishers (3)</font></td>
  </tr>

  <!-- CONSOLE & TOPS -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSOLE AND TOP</font></strong><br />

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
<?php echo $hardtop_standard; ?>
Custom Frameless Windshield<br />
Edson® Stainless Steel Steering Wheel w/ Power Knob<br />
Seastar® EPS System w/ Tilt Helm<br />
Console Switch Panels w/Waterproof Switches & 12V Outlet<br />
Ritchie Compass<br />
Helm Stainless Steel Drink Holder<br />
Walk-in Console <br />
Console Bilge Access <br />
Premium Countertop with Fresh Water Sink<br />
Interior Pull-out Shower<br />
800GPH Shower Sump Pump w/ Poly Cover<br />
Hot & Cold Fresh Water System w/ 34 Gallon Tank<br />
Flat Screen TV<br />
LED Interior Lighting<br />
Skylight with Integral Shading/Screen<br />
Microwave Oven<br />
Stainless Steel Refrigerator<br />
Wood Laminate Cabinets and Storage<br />
Convertible Double Berth with Filler cushion and Storage Center<br />
Dinette with Convertible Seating and Table<br />
Concealed Electric Head</font></td>
  </tr>

  <!-- ELECTRICAL SYSTEM -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRICAL SYSTEM</font></strong><br />

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
LED Cockpit/Livewell Lighting<br />
LED Navigation Lights<br />
LED Blue Underwater Lights (2)<br />
2200 GPH Auto/Manual Bilge High water pump<br />
1000 GPH Auto/Manual Bilge Pump Midship<br />
1250 GPH Auto/Manual Bilge Pump <br />
Aft Bilge Locker Lighting<br />
Side Power® SE60 Electric Bow Thruster w/ Console Joystick (without Helm Master)<br />
Waterproof Electrical Connectors & Tin-Plated Copper Wiring<br />
House Battery Charger, Engine Battery Charger (3 Bank) w/ Shore Power Inlet, Circuit Breaker & Cord<br />
House/Engine Battery System w/ On-Off Switches, Battery Isolator & Console Parallel Switch<br />
C-Zone digital Switching<br />
Lenco® Recessed Electric Trim Tabs w/ Indicators<br />
Electric Fresh Water Head w/ Holding Tank, Overboard Discharge & Pumpout<br />
Main Distribution Panel w/ Circuit Breakers, Digital DC Voltmeter & AC Volt Meter<br />
6000 BTU Air Conditioning with Digital Controller<br />
4.2 Gallon Water Heater<br />
Cable TV Inlet</font></td>
  </tr>

  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING / STORAGE</font></strong><br />

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
Heavy-Duty Marine Grade UV Resistant Vinyl Upholstery<br />
Super Leaning Post with Premium Helm Seating (3) with an Electric Adjustable Captains Chair, 54QT Removable Premium Cooler Under Forward Console Seat, Mezzanine Seating (3) with Storage/Cooler<br />
U-Shaped Bow Lounge w/ Backrest Bolster Cushions<br />
Custom Flip-out Forward Facing Backrest<br />
Automatic Composite Bow Filler w/ Cushion<br />
Forward Console Seat w/ Backrest<br />
Folding Stern Seat<br />
Insulated Bow Storage (3)<br />
Dual Insulated 500QT Cockpit in-floor Fishboxes with Pump-out<br />
45 Gallon Ice Blue Transom Baitwell <br />
70 Gallon Ice Blue Transom Baitwell with Dual High Volume pumps </font></td>
    </tr>
  
  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ANCHOR SYSTEM</font></strong><br />

<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
Stainless Steel 22LB Anchor w/ Swivel<br />
Bow Anchor Locker w/ Freshwater Washdown & Overboard Drain<br />
SS Anchor Roller w/ 8" SS Cleat & Anchor Retainer<br />
Concealed SS Anchor Windlass w/ 200' Rode-15' Chain</font></td>
    </tr>
  </table>
  </td>
</tr>
</table>