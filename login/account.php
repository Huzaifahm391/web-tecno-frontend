<?php
require_once('database.php');
if (isset($_POST) & !empty($_POST)) {

	$country=$database->sanitize($_POST['country']);
	$mobile=$database->sanitize($_POST['mobile']);
    $user=$database->sanitize($_POST['usr']);
	$pass=$database->sanitize($_POST['password']);
	$email=$database->sanitize($_POST['email']);

	$res =$database->create($country,$mobile,$user,$pass,$email);
	if ($res) {
		header("Location:../index.php");
	}
	else{
		echo "There is some error";
	}

}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/account.css">
<title>Customer Login</title>
</head>

<body>


<div class="head">

<div class="logo">
    <img  src="./images/logo.svg">
</div>
</div>

<div class="login">
<div class="login-img">
    <img class="main" src="./images/pic.png">
</div>

<div class="registr">
    
    <div class="login-area">
    <div class="registr-area">
    <h1 id="title">Create your Account</h1> 
    


    <form method="post" class="form" >
    <div class="form-input">
    <select name="country" class="cnt" required >
    <option disabled="disabled" selected="selected" value="" >Please select a country or region</option>
    <option id="0" value="376">Andorra</option>
    <option id="1" value="971">United Arab Emirates</option>
    <option id="2" value="1268">Antigua and Barbuda</option>
    <option id="3" value="1264">Anguilla</option>
    <option id="4" value="355">Albania</option>
    <option id="5" value="374">Armenia</option>
    <option id="6" value="244">Angola</option>
    <option id="7" value="54">Argentina</option>
    <option id="8" value="43">Austria</option>
    <option id="9" value="61">Australia</option>
    <option id="10" value="994">Azerbaijan</option>
    <option id="11" value="1246">Barbados</option>
    <option id="12" value="880">Bangladesh</option>
    <option id="13" value="32">Belgium</option>
    <option id="14" value="226">Burkina-faso</option>
    <option id="15" value="359">Bulgaria</option>
    <option id="16" value="973">Bahrain</option>
    <option id="17" value="257">Burundi</option>
    <option id="18" value="229">Benin</option>
    <option id="19" value="1441">Bermuda Is.</option>
    <option id="20" value="673">Brunei</option>
    <option id="21" value="591">Bolivia</option>
    <option id="22" value="55">Brazil</option>
    <option id="23" value="1242">Bahamas</option>
    <option id="24" value="267">Botswana</option>
    <option id="25" value="375">Belarus</option>
    <option id="26" value="501">Belize</option>
    <option id="27" value="1">Canada</option>
    <option id="28" value="236">Central African Republic</option>
    <option id="29" value="236">Central African Republic</option>
    <option id="30" value="242">Congo</option>
    <option id="31" value="41">Switzerland</option>
    <option id="32" value="225">Côte d'Ivoire</option>
    <option id="33" value="682">Cook Is.</option>
    <option id="34" value="56">Chile</option>
    <option id="35" value="237">Cameroon</option>
    <option id="36" value="86">China</option>
    <option id="37" value="57">Colombia</option>
    <option id="38" value="506">Costa Rica</option>
    <option id="39" value="53">Cuba</option>
    <option id="40" value="357">Cyprus</option>
    <option id="41" value="420">Czech Republic</option>
    <option id="42" value="49">Germany</option>
    <option id="43" value="253">Djibouti</option>
    <option id="44" value="45">Denmark</option>
    <option id="45" value="1890">Dominica Rep.</option>
    <option id="46" value="213">Algeria</option>
    <option id="47" value="593">Ecuador</option>
    <option id="48" value="372">Estonia</option>
    <option id="49" value="20">Egypt</option>
    <option id="50" value="34">Spain</option>
    <option id="51" value="251">Ethiopia</option>
    <option id="52" value="358">Finland</option>
    <option id="53" value="679">Fiji</option>
    <option id="54" value="33">France</option>
    <option id="55" value="241">Gabon</option>
    <option id="56" value="44">United Kingdom</option>
    <option id="57" value="1809">Grenada</option>
    <option id="58" value="995">Georgia</option>
    <option id="59" value="594">French Guiana</option>
    <option id="60" value="233">Ghana</option>
    <option id="61" value="350">Gibraltar</option>
    <option id="62" value="220">Gambia</option>
    <option id="63" value="224">Guinea</option>
    <option id="64" value="30">Greece</option>
    <option id="65" value="502">Guatemala</option>
    <option id="66" value="1671">Guam</option>
    <option id="67" value="592">Guyana</option>
    <option id="68" value="852">Hongkong,China</option>
    <option id="69" value="504">Honduras</option>
    <option id="70" value="509">Haiti</option>
    <option id="71" value="36">Hungary</option>
    <option id="72" value="62">Indonesia</option>
    <option id="73" value="353">Ireland</option>
    <option id="74" value="972">Israel</option>
    <option id="75" value="91">India</option>
    <option id="76" value="964">Iraq</option>
    <option id="77" value="98">Iran</option>
    <option id="78" value="354">Iceland</option>
    <option id="79" value="39">Italy</option>
    <option id="80" value="1876">Jamaica</option>
    <option id="81" value="962">Jordan</option>
    <option id="82" value="81">Japan</option>
    <option id="83" value="254">Kenya</option>
    <option id="84" value="331">Kyrgyzstan</option>
    <option id="85" value="855">Kampuchea (Cambodia )</option>
    <option id="86" value="850">North Korea</option>
    <option id="87" value="82">Korea</option>
    <option id="88" value="965">Kuwait</option>
    <option id="89" value="327">Kazakstan</option>
    <option id="90" value="856">Laos</option>
    <option id="91" value="961">Lebanon</option>
    <option id="92" value="1758">Saint Lueia</option>
    <option id="93" value="1758">St.Lucia</option>
    <option id="94" value="423">Liechtenstein</option>
    <option id="95" value="94">Sri Lanka</option>
    <option id="96" value="231">Liberia</option>
    <option id="97" value="266">Lesotho</option>
    <option id="98" value="370">Lithuania</option>
    <option id="99" value="352">Luxembourg</option>
    <option id="100" value="371">Latvia</option>
    <option id="101" value="218">Libya</option>
    <option id="102" value="212">Morocco</option>
    <option id="103" value="377">Monaco</option>
    <option id="104" value="373">Moldova, Republic of</option>
    <option id="105" value="261">Madagascar</option>
    <option id="106" value="223">Mali</option>
    <option id="107" value="95">Myanmar</option>
    <option id="108" value="976">Mongolia</option>
    <option id="109" value="853">Macao,China</option>
    <option id="110" value="222">Mauritania</option>
    <option id="111" value="1664">Montserrat Is</option>
    <option id="112" value="356">Malta</option>
    <option id="113" value="230">Mauritius</option>
    <option id="114" value="960">Maldives</option>
    <option id="115" value="265">Malawi</option>
    <option id="116" value="52">Mexico</option>
    <option id="117" value="60">Malaysia</option>
    <option id="118" value="258">Mozambique</option>
    <option id="119" value="264">Namibia</option>
    <option id="120" value="227">Niger</option>
    <option id="121" value="234">Nigeria</option>
    <option id="122" value="505">Nicaragua</option>
    <option id="123" value="31">Netherlands</option>
    <option id="124" value="47">Norway</option>
    <option id="125" value="977">Nepal</option>
    <option id="126" value="674">Nauru</option>
    <option id="127" value="64">New Zealand</option>
    <option id="128" value="968">Oman</option>
    <option id="129" value="507">Panama</option>
    <option id="130" value="51">Peru</option>
    <option id="131" value="689">French Polynesia</option>
    <option id="132" value="675">Papua New Cuinea</option>
    <option id="133" value="63">Philippines</option>
    <option id="134" value="92">Pakistan</option>
    <option id="135" value="48">Poland</option>
    <option id="136" value="1787">Puerto Rico</option>
    <option id="137" value="351">Portugal</option>
    <option id="138" value="595">Paraguay</option>
    <option id="139" value="974">Qatar</option>
    <option id="140" value="40">Romania</option>
    <option id="141" value="7">Russia</option>
    <option id="142" value="250">Rwanda</option>
    <option id="143" value="966">Saudi Arabia</option>
    <option id="144" value="677">Solomon Is</option>
    <option id="145" value="248">Seychelles</option>
    <option id="146" value="249">Sudan</option>
    <option id="147" value="46">Sweden</option>
    <option id="148" value="65">Singapore</option>
    <option id="149" value="386">Slovenia</option>
    <option id="150" value="421">Slovakia</option>
    <option id="151" value="232">Sierra Leone</option
        <option id="152" value="378">San Marino</option>
        <option id="153" value="221">Senegal</option>
        <option id="154" value="252">Somali</option>
        <option id="155" value="597">Suriname</option>
        <option id="156" value="239">Sao Tome and Principe</option>
        <option id="157" value="503">EI Salvador</option>
        <option id="158" value="963">Syria</option>
        <option id="159" value="268">Swaziland</option>
        <option id="160" value="235">Chad</option>
        <option id="161" value="228">Togo</option>
        <option id="162" value="66">Thailand</option>
        <option id="163" value="992">Tajikstan</option>
        <option id="164" value="993">Turkmenistan</option>
        <option id="165" value="216">Tunisia</option>
        <option id="166" value="676">Tonga</option>
        <option id="167" value="90">Turkey</option>
        <option id="168" value="1809">Trinidad and Tobago</option>
        <option id="169" value="886">Taiwan,China</option>
        <option id="170" value="255">Tanzania</option>
        <option id="171" value="380">Ukraine</option>
        <option id="172" value="256">Uganda</option>
        <option id="173" value="1">United States of America</option>
        <option id="174" value="598">Uruguay</option>
        <option id="175" value="233">Uzbekistan</option>
        <option id="176" value="1784">Saint Vincent</option>
        <option id="177" value="1784">St.Vincent</option>
        <option id="178" value="58">Venezuela</option>
        <option id="179" value="84">Vietnam</option>
        <option id="180" value="967">Yemen</option>
        <option id="181" value="381">Yugoslavia</option>
        <option id="182" value="27">South Africa</option>
        <option id="183" value="260">Zambia</option>
        <option id="184" value="243">Zaire</option>
        <option id="185" value="263">Zimbabwe</option>
    </select>

    
     
<div class="no-input">
    <div class="no">
    <label class="phone"><select name="cc" id="phone">
            <option value="376">AD + 376</option>
            <option value="971">AE + 971</option>
            <option value="1268">AG + 1268</option>
            <option value="1264">AI + 1264</option>
            <option value="355">AL + 355</option>
            <option value="374">AM + 374</option>
            <option value="244">AO + 244</option>
            <option value="54">AR + 54</option>
            <option value="43">AT + 43</option>
            <option value="61">AU + 61</option>
            <option value="994">AZ + 994</option>
            <option value="1246">BB + 1246</option>
            <option value="880">BD + 880</option>
            <option value="32">BE + 32</option>
            <option value="226">BF + 226</option>
            <option value="359">BG + 359</option>
            <option value="973">BH + 973</option>
            <option value="257">BI + 257</option>
            <option value="229">BJ + 229</option>
            <option value="1441">BM + 1441</option>
            <option value="673">BN + 673</option>
            <option value="591">BO + 591</option>
            <option value="55">BR + 55</option>
            <option value="1242">BS + 1242</option>
            <option value="267">BW + 267</option>
            <option value="375">BY + 375</option>
            <option value="501">BZ + 501</option>
            <option value="1">CA + 1</option>
            <option value="236">CF + 236</option>
            <option value="236">CFR + 236</option>
            <option value="242">CG + 242</option>
            <option value="41">CH + 41</option>
            <option value="225">CI + 225</option>
            <option value="682">CK + 682</option>
            <option value="56">CL + 56</option>
            <option value="237">CM + 237</option>
            <option value="86">CN + 86</option>
            <option value="57">CO + 57</option>
            <option value="506">CR + 506</option>
            <option value="53">CU + 53</option>
            <option value="357">CY + 357</option>
            <option value="420">CZ + 420</option>
            <option value="49">DE + 49</option>
            <option value="253">DJ + 253</option>
            <option value="45">DK + 45</option>
            <option value="1890">DO + 1890</option>
            <option value="213">DZ + 213</option>
            <option value="593">EC + 593</option>
            <option value="372">EE + 372</option>
            <option value="20">EG + 20</option>
            <option value="34">ES + 34</option>
            <option value="251">ET + 251</option>
            <option value="358">FI + 358</option>
            <option value="679">FJ + 679</option>
            <option value="33">FR + 33</option>
            <option value="241">GA + 241</option>
            <option value="44">GB + 44</option>
            <option value="1809">GD + 1809</option>
            <option value="995">GE + 995</option>
            <option value="594">GF + 594</option>
            <option value="233">GH + 233</option>
            <option value="350">GI + 350</option>
            <option value="220">GM + 220</option>
            <option value="224">GN + 224</option>
            <option value="30">GR + 30</option>
            <option value="502">GT + 502</option>
            <option value="1671">GU + 1671</option>
            <option value="592">GY + 592</option>
            <option value="852">HK + 852</option>
            <option value="504">HN + 504</option>
            <option value="509">HT + 509</option>
            <option value="36">HU + 36</option>
            <option value="62">ID + 62</option>
            <option value="353">IE + 353</option>
            <option value="972">IL + 972</option>
            <option value="91">IN + 91</option>
            <option value="964">IQ + 964</option>
            <option value="98">IR + 98</option>
            <option value="354">IS + 354</option>
            <option value="39">IT + 39</option>
            <option value="1876">JM + 1876</option>
            <option value="962">JO + 962</option>
            <option value="81">JP + 81</option>
            <option value="254">KE + 254</option>
            <option value="331">KG + 331</option>
            <option value="855">KH + 855</option>
            <option value="850">KP + 850</option>
            <option value="82">KR + 82</option>
            <option value="965">KW + 965</option>
            <option value="327">KZ + 327</option>
            <option value="856">LA + 856</option>
            <option value="961">LB + 961</option>
            <option value="1758">LC + 1758</option>
            <option value="1758">LC + 1758</option>
            <option value="423">LI + 423</option>
            <option value="94">LK + 94</option>
            <option value="231">LR + 231</option>
            <option value="266">LS + 266</option>
            <option value="370">LT + 370</option>
            <option value="352">LU + 352</option>
            <option value="371">LV + 371</option>
            <option value="218">LY + 218</option>
            <option value="212">MA + 212</option>
            <option value="377">MC + 377</option>
            <option value="373">MD + 373</option>
            <option value="261">MG + 261</option>
            <option value="223">ML + 223</option>
            <option value="95">MM + 95</option>
            <option value="976">MN + 976</option>
            <option value="853">MO + 853</option>
            <option value="222">MRT + 222</option>
            <option value="1664">MS + 1664</option>
            <option value="356">MT + 356</option>
            <option value="230">MU + 230</option>
            <option value="960">MV + 960</option>
            <option value="265">MW + 265</option>
            <option value="52">MX + 52</option>
            <option value="60">MY + 60</option>
            <option value="258">MZ + 258</option>
            <option value="264">NA + 264</option>
            <option value="227">NE + 227</option>
            <option value="234">NG + 234</option>
            <option value="505">NI + 505</option>
            <option value="31">NL + 31</option>
            <option value="47">NO + 47</option>
            <option value="977">NP + 977</option>
            <option value="674">NR + 674</option>
            <option value="64">NZ + 64</option>
            <option value="968">OM + 968</option>
            <option value="507">PA + 507</option>
            <option value="51">PE + 51</option>
            <option value="689">PF + 689</option>
            <option value="675">PG + 675</option>
            <option value="63">PH + 63</option>
            <option value="92">PK + 92</option>
            <option value="48">PL + 48</option>
            <option value="1787">PR + 1787</option>
            <option value="351">PT + 351</option>
            <option value="595">PY + 595</option>
            <option value="974">QA + 974</option>
            <option value="40">RO + 40</option>
            <option value="7">RU + 7</option>
            <option value="250">RW + 250</option>
            <option value="966">SA + 966</option>
            <option value="677">SB + 677</option>
            <option value="248">SC + 248</option>
            <option value="249">SD + 249</option>
            <option value="46">SE + 46</option>
            <option value="65">SG + 65</option>
            <option value="386">SI + 386</option>
            <option value="421">SK + 421</option>
            <option value="232">SL + 232</option>
            <option value="378">SM + 378</option>
            <option value="221">SN + 221</option>
            <option value="252">SO + 252</option>
            <option value="597">SR + 597</option>
            <option value="239">ST + 239</option>
            <option value="503">SV + 503</option>
            <option value="963">SY + 963</option>
            <option value="268">SZ + 268</option>
            <option value="235">TD + 235</option>
            <option value="228">TG + 228</option>
            <option value="66">TH + 66</option>
            <option value="992">TJ + 992</option>
            <option value="993">TM + 993</option>
            <option value="216">TN + 216</option>
            <option value="676">TO + 676</option>
            <option value="90">TR + 90</option>
            <option value="1809">TT + 1809</option>
            <option value="886">TW + 886</option>
            <option value="255">TZ + 255</option>
            <option value="380">UA + 380</option>
            <option value="256">UG + 256</option>
            <option value="1">US + 1</option>
            <option value="598">UY + 598</option>
            <option value="233">UZ + 233</option>
            <option value="1784">VC + 1784</option>
            <option value="1784">VC + 1784</option>
            <option value="58">VE + 58</option>
            <option value="84">VN + 84</option>
            <option value="967">YE + 967</option>
            <option value="381">YU + 381</option>
            <option value="27">ZA + 27</option>
            <option value="260">ZM + 260</option>
            <option value="243">ZR + 243</option>
            <option value="263">ZW + 263</option>
        </select> 
        </label>
    <input type="text" name="mobile" autocomplete="off" placeholder="Phone number" class="pno" >
</div>
</div>

    <div class="username">
    <input class="usr" type="text" name="usr" placeholder="Enter Username" autocomplete="off" required> 
    </div> 
    <div class="username">
    <input class="usr" type="email" name="email" placeholder="Enter Email" autocomplete="off" required> 
    </div> 

    <div class="password">
    <input class="pass" type="password" name="password" placeholder="Password" autocomplete="off" required> 
    </div> 

    <div class="confirm-pss">
        <input class="cpass" type="password" name="password" placeholder="Password confirm" autocomplete="off" required> 
        </div> 

    <div class="submit"></div> 
    <div class="btn-submit">
    <button class="btn-cntrl" type="submit" >Create Account</button></div>

    <div class="links">
        <p>Already have an account?<a href="log.php">Login</a> </p></div>

</div></form> </div></div></div>
</div></div>
<footer>
    

    <div class="cmpany">
        <div id="link">
        <a id="l1" href="https://www.tecno-mobile.com/pak/privacy-policy">Privacy Policy</a>
        <a id="l2" href=" https://www.tecno-mobile.com/pak/terms-of-use">Terms of Use</a>
        <a id="l3" href="https://www.tecno-mobile.com/pak/site-map">Sitemap</a></div>
        <div id="copy">
        <h5 id="p1">©2021-2025 TECNO Mobile</h5></div>
    </div>
    
 </footer>








</body>
</html>