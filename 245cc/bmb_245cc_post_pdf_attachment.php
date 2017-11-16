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
$cushion_color = '';
$engine = '';
$rubrail = '';
$steering_system = '';
$seating = '';
$cleats = '';
$bow_rail = '';
$toe_rail = '';
$top = '';
$trailer = '';
$head = '';
$ski_pylon = '';
$painted_engine = '';
$transom_rod_holders = '';
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
$transducers_0 = '';
$transducers_1 = '';
$transducers_2 = '';
$getoptions_0 = '';
$getoptions_1 = '';
$getoptions_2 = '';
$getoptions_3 = '';
$getoptions_4 = '';

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
    case 'cushion_color':
          $cushion_color = $value;
          break;
    case 'engine':
          $engine = $value;
          break;
    case 'seating':
          $seating = $value;
          break;
    case 'rubrail':
          $rubrail = $value;
          break;
    case 'steering_system':
          $steering_system = $value;
          break;
    case 'cleats':
          $cleats = $value;
          break;
    case 'bow_rail':
          $bow_rail = $value;
          break;
    case 'toe_rail':
          $toe_rail = $value;
          break;
    case 'top':
          $top = $value;
          break;
    case 'trailer':
          $trailer = $value;
          break;
    case 'head':
          $head = $value;
          break;
    case 'ski_pylon':
          $ski_pylon = $value;
          break;
    case 'painted_engine':
          $painted_engine = $value;
          break;
    case 'transom_rod_holders':
          $transom_rod_holders = $value;
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
      }
    }
}


/* REPLACE BOAT IMAGE DEPENDING ON COLOR */
if (stripos($color, "cabernet") !== false) { 
 $img_file = "245cc-cabernet.jpg"; 
} elseif (stripos($color, "fighting") !== false) { 
 $img_file = "245cc-fighting-lady-yellow.jpg"; 
} elseif (stripos($color, "ice") !== false) { 
 $img_file = "245cc-ice-blue.jpg"; 
} elseif (stripos($color, "midnight") !== false) { 
 $img_file = "245cc-midnight-blue.jpg";
} elseif (stripos($color, "olive") !== false) { 
 $img_file = "245cc-olive-green.jpg";
} elseif (stripos($color, "pewter") !== false) { 
 $img_file = "245cc-pewter.jpg";
} elseif (stripos($color, "seafoam") !== false) { 
 $img_file = "245cc-sea-foam-green.jpg";
} elseif (stripos($color, "barth") !== false) { 
 $img_file = "245cc-st-barths-blue.jpg";
} elseif (stripos($color, "stars") !== false) { 
 $img_file = "245cc-stars-stripes-blue.jpg";
} elseif (stripos($color, "irish") !== false) { 
 $img_file = "245cc-irish-cream.jpg";
} else { 
 $img_file = "245cc-standard-white.jpg"; 
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
  <td><img src="images/245cc/pdf/<?php echo $img_file; ?>" width="450px" height="266px"/></td>
</tr>
<tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="14">MY EDGEWATER 245CC DEEP-V CENTER CONSOLE<br />
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
  <td width="44%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">LENGTH: <strong>24'6" | 7.5m</strong><br />
  BEAM: <strong>8'6" | 2.6m</strong><br />
  DRAFT: <strong>21" | 53.3cm</strong><br />
  MAX POWER: <strong>400hp | 261kw</strong></font></td>
  <td width="56%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">WEIGHT: <strong>3500lbs | 1588kg</strong><br />
  FUEL CAPACITY: <strong>140gal | 530L</strong><br />
  COCKPIT AREA: <strong>89sq.ft. | 8.2m2</strong><br />
  TRANSFORM HEIGHT: <strong>Single-30” or Twin-25”</strong></font></td>
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
      <?php echo $steering_system; ?>
    </font></td>
  </tr>
  <tr>
	<!-- TOPS AND COVERS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">TOPS AND COVERS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($top)) {echo $top . '<br />';} ?>
      <?php if (!empty($toe_rail)) {echo $toe_rail . '<br />';} ?>
      <?php if (!empty($transom_rod_holders)) {echo $transom_rod_holders . '<br />';} ?>
      <?php if (!empty($head)) {echo $head . '<br />';} ?>
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
  <!-- BOW RAIL -->
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
      <?php if (!empty($seating)) {echo $seating . '<br />';} ?>
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
      <?php echo $transducers_2; ?>
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
      <?php if (!empty($trailer)) {echo $trailer . '<br />';} ?>
      <?php echo $ski_pylon; ?>
    </font></td>
	</tr>
    </table>  
</td>

<td width="2%"></td>

<td width="2%" valign="top" align="center">
<table width="1px" bgcolor="#dcdddf">
<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
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

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Stainless Steel Bow and Stern Eyes (3)<br />
Stainless Steel Gunwale Mounted Rod Holders (4)<br />
Removable Armstrong Transom Boarding Ladder<br />
Walk-thru Transom Door w/ SS Latch<br />
Fire Extinguishers (2)</font></td>
  </tr>

  <!-- CONSOLE & TOPS -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSOLE AND TOP</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10"><?php echo $hardtop_standard ?>
  3/8" Clear Acrylic Windshield<br />
Console Switch Panel w/ Waterproof Switches, Circuit Breakers & 12V Outlet<br />
Ritchie Compass<br />
Stainless Steel Drink Holders on Console (2)<br />
Raw Water Washdown Outlet<br />
Fresh Water Shower w/ 19 Gallon Reservoir</font></td>
  </tr>
  
  <!-- ELECTRICAL SYSTEM -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRICAL SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">LED Cockpit/Livewell Lighting<br />
LED Navigation Lights<br />
Underwater Blue LED Lights (2)<br />
1250 GPH Auto/Manual Bilge Pump (1)<br />
Waterproof Electrical Connectors & Tin Plated Copper Wiring<br />
Battery Selector Switch & Wiring for Dual Batteries<br />
Lenco® Recessed Electric Trim Tabs w/ Indicators</font></td>
  </tr>

  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING / STORAGE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Heavy-Duty Marine Grade UV Resistant Vinyl Upholstery<br />
U-Shaped Bow Lounge w/ Backrest Bolster Cushions<br />
Bow Filler w/ Cushions and Table Leg<br />
Folding Aluminum Seat in Front of Console w/ Backrest<br />
28 Gallon Transom Baitwell<br />
Under Gunwale Rod Racks<br />
Insulated Bow Storage/Fishbox w/ Overboard Drain<br />
Insulated 180QT In-Floor Fishboxes w/ Pumpout (2)</font></td>
    </tr>
  
  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ANCHOR SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Bow Anchor Locker w/ Overboard Drain<br />
SS Anchor Roller w/ 8" SS Cleat & Anchor Retainer<br />
SS Lewmar V700 Electric Anchor Windlass w/ 200' Rode-15' Chain</font></td>
    </tr>
  </table>
  </td>
</tr>
</table>