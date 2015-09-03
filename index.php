<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ReconnectYou</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<link href="css/master.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/iview/css/iview.css" type='text/css' media='all' />
<link rel="stylesheet" href="plugins/iview/css/skin/style.css" type='text/css' media='all' />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src= "js/jquery-migrate-1.2.1.js" ></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.nicescroll.js"></script>
</head>

<body>
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  > 
  
  <!-- Loader Landing Page -->
  <div id="ip-container" class="ip-container"> 
    <!-- initial header -->
    <header class="ip-header" >
      <div class="ip-loader">
        <div class="text-center">
          <div class="ip-logo"><img  src="img/logo.png" height="50" width="294" alt="logo"></div>
        </div>
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
        <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
        <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg> </div>
    </header>
  </div>
  <!-- Loader end -->
  
  <!-- HEADER -->
  <div class="header">
    <div class="container">
      <div class="header-inner">
        <div class="row">
          <div class="col-md-4 col-xs-12"> <a href="index.php" class="logo"> <img class="logo__img" src="img/logo.png" height="50" width="294" alt="Logo"> </a> </div>
          <div class="col-md-8 col-xs-12">
            <div class="header-block">
                <span class="header-label">
                    <i class="icon-header icon-call-in color_primary"></i>
                    <span class="helper">
                        Zavolajte mi <a href="tel:0948 083 983"><strong>0948 083 983</strong></a>
                    </span>
                </span>
                <span class="header-label">
                    <i class="icon-header icon-envelope-open color_primary"></i>
                    <span class="helper">
                        Napíšte mi <a href="mailto:filipkov@reconnectyou.sk"><strong>filipkov@reconnectyou.sk</strong></a>
                    </span>
                </span>
                <span class="header-label">
                    <span class="helper">
                        Ak nepíšem, alebo nezdvíham - liečim. Ozvem sa Vám najneskôr do 48 hodín.
                    </span>
                </span>
            </div>
            <form class="hidden-md hidden-lg text-center" id="search-global-mobile" method="get">
              <input type="text" value="" id="search-mobile" name="s" >
              <button type="submit"><i class="icon fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
      <!-- end header-inner--> 
    </div>
    <!-- end container-->
    
    <div class="top-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12  col-xs-12">
            <div class="navbar yamm "  style="background: none">
              <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="#" class="navbar-brand">Menu</a> </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="dropdown"><a href="index.php"  >Domov <b class="color_primary"></b> </a>
                  </li>
                  <li class="dropdown"><a href="about-1.html"  >O mne<b class="color_primary"></b> </a>
                  </li>
                    <li class="dropdown"><a href="#"  > Dokumenty <b class="caret color_primary"></b> </a>
                        <ul role="menu" class="dropdown-menu">
                            <li> <a href="documents/KLUBOVE PONUKY 2015.pdf" target="_blank"> Klubová ponuka</a> </li>
                            <li> <a href="documents/protokol o rekonektívnom liečení.pdf" target="_blank"> Protokol o rekonektívnom liečení</a> </li>
                        </ul>
                    </li>
                  <li><a href="appointment-form.html"  >REZERVAČNÝ FORMULÁR </a> </li>
                  <li><a href="contact.html"  >KONTAKT </a> </li>
                </ul>
                <form id="search-global-menu" class="hidden-xs hidden-sm" method="get">
                  <input type="text" value="" id="search" name="s" >
                  <button type="submit"><i class="icon-magnifier"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end top-nav --> 
  </div>
  <!-- HEADER END -->
  
  <div id="iview" class="main-slider">
    <div data-iview:thumbnail="media/slider_main/1.jpg" data-iview:image="media/slider_main/1.jpg" data-iview:transition="block-drop-random" >
      <div class="container">
        <div class="iview-caption bg-no-caption" data-x="260" data-y="73" data-transition="expandLeft">
          <div class="custom-caption">
            <p class="slide-title bg-color_second">Spoznajte rekonektívne liečenie</p>
            <p class="slide-text">zlepšite si imunitu</p>
            <p class="slide-text">zharmonizujete sa</p>
            <a href="#sluzby" class="btn bg-color_primary">Prečítajte si viac <span class="btn-plus">+</span></a> </div>
        </div>
      </div>
    </div>
    <div data-iview:thumbnail="media/slider_main/2.jpg" data-iview:image="media/slider_main/2.jpg" data-iview:transition="block-drop-random" >
      <div class="container">
        <div class="iview-caption  bg-no-caption" data-x="260" data-y="73" data-transition="expandLeft">
          <div class="custom-caption">
            <p class="slide-title bg-color_second">Rekonektívne liečenie</p>
            <p class="slide-title_second">Vhodné hlavne pre športovcov</p>
            <p class="slide-text">zlepšite si osobný aj tímový</p>
            <a href="#sluzby" class="btn bg-color_primary">Prečítajte si viac <span class="btn-plus">+</span></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end iview -->
  
  <div class="container">
    <div class="block-hourse bg bg_1 bg_transparent wow zoomIn" data-wow-delay="1s">
      <div class="row">
        <div class="col-md-6">
          <div class="block-hourse__inner block-hourse__inner_first">
            <p class="block-hourse__text"><i class="icon icon-note"></i>Máte záujem znovu skvalitniť svoj život?</p>
            <p class="block-hourse__title">STAČÍ DOHODNÚŤ MESTO</p>
            <a class="btn btn_transparent" href="appointment-form.html">POŽIADAŤ O MESTO</a> </div>
        </div>
        <section class="col-md-6">
          <div class="block-hourse__inner block-hourse__inner_second">
            <div class="block-hourse__title-table"><i class="icon icon-clock"></i>ČASOVÝ ROZVRH</div>
            <table>
              <tbody>
                <tr>
                  <td>Pondelok</td>
                  <td><span class="line-bottom"></span></td>
                  <td>Prievidza klienti, výnimka športovci v Prievidzi</td>
                </tr>
                <tr>
                  <td>Utorok - Štvrtok</td>
                  <td><span class="line-bottom"></span></td>
                  <td>v rámci SR športové kluby, výnimka klienti </td>
                </tr>
                <tr>
                  <td>Piatok - Nedeľa</td>
                  <td><span class="line-bottom"></span></td>
                  <td>Prievidza klienti, výnimka športové kluby</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
      <!-- end row --> 
    </div>
    <!-- end block-hourse --> 
  </div>
  <!-- end container -->
  
  <section class="advantages wow fadeInUp" data-wow-delay="1.5s" id="sluzby">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="ui-title-block">Akú službu ponúka <strong class="font-weight_600">Reconnect</strong><span class="font-weight-norm color_primary">You</span></h1>
          <div class="ui-subtitle-block">Prečo vám chcem pomôcť, alebo akú službu ponúkam</div>
        </div>
        <section class="advantages__inner col-sm-4"> <i class="icon fa fa-medkit color_second"></i>
          <h2 class="ui-title-inner">Rekonektívne liečenie</h2>
          <i class="decor-brand"></i>
          <p class="ui-text text-center">Rekonektívne liečenie je proces, pri ktorom sa energetické vibrácie liečenej osoby zlaďujú s vibráciami rekonektívnej energie. Spájajú človeka s doteraz nepoznanou energiou, ktorá mení životy.</p>
          <a href="#details" class="btn btn_small">ČÍTAŤ VIAC</a> </section>
          <section class="advantages__inner col-sm-4"> <i class="icon fa fa-spinner color_second"></i>
              <h2 class="ui-title-inner">Energia + Svetlo + Informácia</h2>
              <i class="decor-brand"></i>
              <p class="ui-text text-center">Používaním tejto liečivej energie nielenže sa riešia fyzické či psychické problémy, ale spájajú sa vlákna DNA. "Spájanie vlákien" znamená, že môžeme využívať schopnosti, ktoré sme dávno mali, ale boli potlačené.</p>
              <a href="#details" class="btn btn_small">ČÍTAŤ VIAC</a> </section>
        <section class="advantages__inner col-sm-4"> <i class="icon fa fa-soccer-ball-o color_second"></i>
          <h2 class="ui-title-inner">Vedenie športovcov</h2>
          <i class="decor-brand"></i>
          <p class="ui-text text-center">Viesť športovcov znamená byť dobrým trénerom, koučom, lídrom. Znamená to najmä predísť negatívnym následkom tejto náročnej práce – krásnemu poslaniu.</p>
          <a href="#details" class="btn btn_small">ČÍTAŤ VIAC</a> </section>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end advantages -->



    <section class="section bg bg_5 bg_transparent" id="details">
        <div class="container">
            <div class="row">
                <div class="col-md-6 color_white wow bounceInleft">
                    <h2 class="ui-title-block color_white font-weight_700">Čo je to rekonektívne liečenie?</h2>
                    <div class="subtitle_mod-1">Spojenie človeka s doteraz nepoznanou energiou</div>
                    <p class="ui-text color_white">
                        Rekonektívne liečenie je proces, pri ktorom sa energetické vibrácie liečenej osoby zlaďujú s vibráciami rekonektívnej energie. Spájajú človeka s doteraz nepoznanou energiou, ktorá mení k lepšiemu vaše životy. Frekvenčné energie prichádzajú na Zem prostredníctvom nového energetického spektra. Frekvencie rekonektívneho liečenia sú nové liečivé frekvencie, ktoré nesú energiu, svetlo a informácie. Majú vyššiu vibráciu a frekvencie, s ktorými doteraz pracovalo naše telo. Dochádza k harmonizácii  - uzdraveniu.
                    </p>
                    <p class="ui-text color_white">
                        Každá skúsenosť s rekonektívnym liečením je jedinečná. Je schopné nás znovu napojiť na vesmír a na našu základnú podstatu. Liečenie vždy príde vo forme, ktorá je pre človeka najprijateľnejšia. Používaním tejto liečivej energie nielenže sa riešia fyzické či psychické problémy, ale spájajú sa vlákna DNA. "Spájanie vlákien" znamená, že môžeme využívať schopnosti, ktoré sme dávno mali, ale boli potlačené. <strong>Tieto frekvencie dokážu nájsť v tele človeka poškodené miesto a opraviť ho</strong>.
                    </p>
                    <p class="ui-text color_white">
                        Rekonektívne liečenie je nový stav bytia. Zasiahne vždy tam, kde to daný človek naozaj potrebuje. Nie vždy to musí byť v súlade s jeho predstavou.
                    </p>
                    <p class="ui-text color_white">
                        Zlepší sa imunita a opraví sa jeho poškodený genetický kód. Tento proces je  vedecky zdokumentovaný a potvrdený. Verejná odbornosť do dnešného dňa podrobuje prácu Dr. Erica Pearla k dôslednému dohľadu a eviduje tisíce overených prípadov uzdravenia, ktoré zaraďuje do kolonky - súčasnou vedou zdokumentované uzdravenie.
                    </p>
                    <p class="ui-text color_white">
                        O využití rekonektívneho liečenia by mali pouvažovať najmä tí, ktorí sú vrcholovými športovcami telom aj duchom. Tí, ktorí chcú naozaj podávať vrcholové výkony a chcú byť prví. Hokejisti, plavci, bežci, basketbalisti, futbalisti, vlastne všetci bez rozdielu. Rekonektívne liečenie by mali využívať hlavne ľudia ktorí pracujú pod stresom. Zvýši sa ich pracovný výkon, športová forma a práca bude potešením.
                    </p>

                    <!--<a class="btn btn_transparent link_on-youtube wow bounceInRight" href="https://youtu.be/8D7Ef6uBNKs" rel="prettyPhoto" title="YouTube">POZRITE SI VIDEO</a> -->
                </div>


                    <div class="col-md-5 col-md-offset-1 text-center">
                        <!--
                        <a class="link_on-youtube wow bounceInRight" href="https://youtu.be/8D7Ef6uBNKs" rel="prettyPhoto" title="YouTube">
                            <i class="icon_video-player icon-camcorder bg-color_primary"></i>
                            <img src="media/450x270/1.jpg" height="270" width="450" alt="Link on youtube">
                        </a>
                        -->
                        <div class="hover__figure">
                            <img src="media/450x270/8.jpg" height="270" width="450" alt="Link on youtube">
                        </div>
                        <hr />
                        <div class="hover__figure">
                            <img src="media/450x270/2.jpg" height="270" width="450" alt="Link on youtube">
                        </div>
                    </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->
  
  <section class="slider-reviews section-large slider-reviews_1-col bg bg_7 bg_transparent">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="ui-title-block text-center">Čo hovoria klienti spoločnosti <strong class="color_primary">ReconnectYou</strong></h2>
          <div class="ui-subtitle-block text-center">Priatelia, z mojich skúseností viem, že toto rekonektívne liečenie fungovalo, aj keď tomu klienti neverili. Oblečení si ľahli a relaxovali, ostatné už viete z niektorých referencií...</div>
          <i class="decor-brand"></i> </div>
          <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                  <ul class="custom-list">
                      <li class="normal">
                          Rekonektívnemu liečeniu sa venujem profesionálne už 2 roky a mám preliečených viac ako 100 klientov
                      </li>
                      <li>
                          <h3>Športovci:</h3>
                          <ul>
                              <li>
                                  <h4>Michal Sersen - hokejista</h4>
                                  Bol som dlhodobo zranený, následne som absolvoval 3 x rekonektívne liečenie u p. Filipkova. Po liečení bola zrušená už nepotrebná predtým plánovaná operácia.Viac než 18 mesiacov som zdravý, v optimálnej kondícii.
                              </li>
                              <li>
                                  <h4>Tibor Lešniak - tenisový tréner</h4>
                                  Mal som neustále veľké bolesti v pravej ruke, hľadal som opakovane neúspešne pomoc v klasickej medicíne! Dozvedel som sa o rekonektívnom liečení a p. Filipkovovi, ktorý mi promptne poskytol 3 x rekonektívne liečenie. Moja ruka sa vo veľmi krátkej dobe uzdravila.
                                  <br/>
                                  Bez akéhokokoľvek obmedzenia som jeden a pol roka.
                              </li>
                              <li>
                                  <h4>Filip Hlohovský - futbalista</h4>
                                  Oslovil ma ako prievidžana priamo p. Filipkov.
                                  <br/>
                                  Vysvetlil mi ako rekonektívne liečenie funguje. Keďže som prežíval zlé obdobie z pohľadu športovej kariéry a navyše som mal zdravotné problémy, veľmi rád som súhlasil. Dostal som 3 rekonektívne liečenia. Všetky 3 problémy sa postupne úplne vyriešili!
                                  <br/>
                                  Môžem len a len doporučiť, viac než 15 mesiacov som zdravý, futbalovo sa mi darí.
                              </li>
                              <li>
                                  Na požiadanie trénera MŠK Žilina, Adriana Gulu, som 3 krát preliečil brazílčna Williama Alves De Oliveiru, ktorý sa po liečení výrazne zlepšil v tréningovom procese a stal sa rozdielovým hráčom v rozhodujúcich zápasoch.
                              </li>
                              <li>
                                  Na požiadanie majiteľa klubu HK Hlohovec, pána Bobáka, som pred rozhodujúcim zápasom o postup do finále preliečil takmer celý tím, čo významne prispelo k víťazstvu tímu a postupu do finále ligy.
                              </li>
                              <li>
                                  Na základe mojho oslovenia som 3 krát liečil slovenského hokejistu pôsobiaceho v NHL. Po spoločnej dohode nezverejňujem jeho meno.
                              </li>
                          </ul>
                      </li>
                      <li>
                          <h3>Ostatní:</h3>
                          <ul>
                              <li>
                                  <h4>Vojtech Kabáth - manager so svojou rodinou</h4>
                                  V polovičke roku 2015 som paralelne pracoval na viacerých projektoch, staral sa intenzívne o naše 3 deti a stress a vysoké tempo ma úplne vyčerpali. Potreboval som spomaliť, získať odstup - čo sa nedalo z tej pozície, do ktorej som sa dostal. S Martinom sme mali 3 liečenia, počas ktorých som sa výrazne zharmonizoval, usporiadal som si priority a úprimne sa pozrel na seba. Začalo sa mi lepšie dýchať - aj fyzicky v skutočnom živote. Liečenia mi pomohli lepšie nastaviť aktivity, aby som sa neyvčerpával a dokázal si užiť život.
                              </li>
                              <li>
                                  <h4>Peter Vargic - developér s manželkou</h4>
                                  Hoci obaja sme prievidžania, poznáme sa len krátko. Keď som sa dozvedel od Martina že robí  rekonektívne liečenie a ako mi môže pomôcť, neváhal som a hneď cez nasledujúci predĺžený víkend som to absolvoval ja, plus môj kolega, plus moja manželka.
                                  <br/>
                                  Odvtedy pozorujeme, že máme viac energie, pozitívny prístup, viac sa nám darí kariérne. Doma je väčšia pohoda. V podstate nám tieto liečenia zmenili život k lepšiemu.
                              </li>
                              <li>
                                  <h4>Pavol Kováčik - manager s matkou</h4>
                                  Martina Filipkova som spoznal na pretekoch Spartan Race. Odvtedy sme kamaráti. Za nejaký čas som mal veľké bolesti a problémy s kolenom.
                                  <br/>
                                  Vedel som že Martin sa venuje úspešne tomuto liečeniu.
                                  <br/>
                                  Ešte v piatok ráno som kvôli bolesti v kolene nemohol na nohu ani dostupiť a zvažoval som, že z extrémneho preteku odstúpim, alebo si nájdem náhradnika... Kedže som vedel, že Martin robí rekonektívne liečenie, cestou na pretek som sa k nemu zastavil, a som rád, že ma pohotovo prijal. Už po prvom sedení som na druhý deň dokázal pretek o dĺžke 25km zvládnuť s nadpriémerným výsledkom.
                                  <br/>
                                  Koleno bolo 100%tné, doslova zázrak! Liečbu som dokončil, viac než rok som úplne zdravý. Úspešne som to odporučil aj mojej matke.
                              </li>
                              <li>
                                  <h4>Monika - vdova</h4>
                                  Cez jednu moju priateľku som sa dozvedela o rekonektívnom liečení a Martinovi Filipkovovi. Zomrel mi moj muž, bola som z toho veľmi smutná, stratila som zmysel života, po absolvovaní 3-och týchto liečení som našla svoj vnútorný pokoj, žijem tu a teraz, mám priateľa s ktorým mám pekný vzťah, veľa sa usmievam, radujem sa...
                              </li>
                          </ul>
                      </li>
                      <li>
                          <h3>Moja rodina:</h3>
                          <ul>
                              <li>
                                  <h4>Moja partnerka Alena</h4>
                                  Keď som videla ako sa môjmu Martinovi darí v rekonektívnom liečení, tak som ho poprosila o pomoc mne osobne.
                                  <br/>
                                  Môžem povedať, že odvtedy nemám studené ruky a nohy, nebývam zimomravá, ďalej už nemám tzv. syndróm nepokojných nôh. Zlepšila sa mi pokožka na celom tele, aj keď som prestala fajčiť, nemám žiadne abstinenčné príznaky. Navyše viac sa mi darí v mojej kariére.
                              </li>
                              <li>
                                  <h4>Môj syn Adam</h4>
                                  S otcom máme dobrý vzťah. Keď mi toto rekonektívne liečenie odporučil, s malým váhaním som prijal ponuku. Zlepšil sa mi zdravotný stav, viac si verím, viem čo chcem a nechcem. Zbavil som sa strachov, teším sa na nové výzvy, práve teraz mením zamestnanie.
                              </li>
                              <li>
                                  <h4>Moja dcéra Kristína</h4>
                                  Keď som videla ako rekonektívne liečenie pomohlo otcovej partnerke a bratovi, rozhodla som sa ho vyskúšať aj ja.
                                  <br/>
                                  Takže môžem povedať, že sa mi podarilo ukončiť dlhodobý nefunkčný vzťah, vybudovať si úžasný nový, idem si robiť teraz vodičský preukaz.
                                  <br/>
                                  Verím že tento rok budem mať aj novú prácu, potom sa pustím do fajčenia...
                              </li>
                          </ul>
                      </li>
                      <li>
                          <h3>Zvieratá:</h3>
                          <ul>
                              <li>
                                  <h4>Náš 6-ročný rodinný pes labrador Lola</h4>
                                  Keď som čítal knihu a absolvoval seminár, bolo opakovane napísané a povedané.
                                  <br/>
                                  Že toto rekonektívne liečenie funguje rovnako na ľudí, rovnako na zvieratá.
                                  <br/>
                                  To ma veľmi zaujalo, super, paráda, ale ľahšie sa to ,,skúša,, na cudzích zvieratách, ako na tom úplne prvom a vašom.
                                  <br/>
                                  Ale čo už keď mala opakované epilepticķé záchvaty.
                                  <br/>
                                  Od jej 3-och preliečení je viac než 3 mesiace a zatiaľ je to OK.
                                  <br/>
                                  Veríme že sa s Lolou spoločne dožijeme ešte minimálne ďalších 6 vitálnych rokov.
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="hover__figure">
                      <img src="media/450x270/3.jpg" height="270" width="450" alt="Link on youtube">
                  </div>
                  <div class="separator_30"></div>
                  <div class="hover__figure">
                      <img src="media/450x270/4.jpg" height="270" width="450" alt="Link on youtube">
                  </div>
                  <div class="separator_30"></div>
                  <div class="hover__figure">
                      <img src="media/450x270/5.jpg" height="270" width="450" alt="Link on youtube">
                  </div>
                  <div class="separator_30"></div>
                  <div class="hover__figure">
                      <img src="media/450x270/6.jpg" height="270" width="450" alt="Link on youtube">
                  </div>
                  <div class="separator_30"></div>
                  <div class="hover__figure">
                      <img src="media/450x270/7.jpg" height="270" width="450" alt="Link on youtube">
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- end slider-reviews -->
  
  <div class="banner bg bg_3 bg_transparent wow zoomIn" data-wow-delay="1s">
    <div class="container"> 
    
      <div class="row">
        <div class="col-xs-12">
          <ul class="list-progress">
            <li> <span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-user-md"></i></span>
              <div class="info"> <span class="chart" data-percent="123"> <span class="percent"></span> </span> <span class="label-chart">Klientov</span> </div>
            </li>
            <li> <span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-hospital-o"></i></span>
              <div class="info"> <span class="chart" data-percent="3"> <span class="percent"></span> </span> <span class="label-chart">Mestá</span> </div>
            </li>
            <li> <span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-heartbeat"></i></span>
              <div class="info"> <span class="chart" data-percent="10"> <span class="percent"></span> </span> <span class="label-chart">Športových klubov</span> </div>
            </li>
            <li> <span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-shield"></i></span>
              <div class="info"> <span class="chart" data-percent="168"> <span class="percent"></span> </span> <span class="label-chart">Športovcov</span> </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->
  
  <footer class="footer">
    <div class="footer__inner">
      <div class="container">
        <div class="footer__block clearfix">
          <div class="block__wrap pull-left">
            <p class="block__title"><i class="block__icon icon-note"></i>Máte záujem znovu skvalitniť svoj život?</p>
            <p class="block__text">STAČÍ DOHODNÚŤ MESTO</p>
          </div>
          <a class="block__btn btn bg-color_second pull-right" href="appointment-form.html">POŽIADAŤ O MESTO <span class="btn-plus">+</span></a> </div>
        <div class="row">
          <div class="col-sm-6">
            <section class="footer__section">
              <h2 class="footer__title">ReconnectYou</h2>
              <i class="decor-brand decor-brand_footer"></i>
              <address class="footer__contacts">
              <i class="footer__icon icon-pointer color_primary"></i>Odbojárov 3, Bratislava 831 04
              </address>
              <p class="footer__contacts"><i class="footer__icon icon-call-in color_primary"></i>0948 083 983</p>
              <p class="footer__contacts"><i class="footer__icon icon-envelope-open color_primary"></i>filipkov@reconnectyou.sk</p>
            </section>
          </div>
            <div class="col-sm-6">
            <section class="footer__section">
                <h2 class="footer__title">Časový rozvrh</h2>
                <i class="decor-brand decor-brand_footer"></i>
                <table>
                    <tbody>
                    <tr>
                        <td style="width: 100px">Pondelok</td>
                        <td><span class="line-bottom"></span></td>
                        <td>Prievidza klienti, výnimka športovci v Prievidzi</td>
                    </tr>
                    <tr>
                        <td style="width: 100px">Utorok - Štvrtok</td>
                        <td><span class="line-bottom"></span></td>
                        <td>V rámci SR športové kluby, výnimka klienti </td>
                    </tr>
                    <tr>
                        <td style="width: 100px">Piatok - Nedeľa</td>
                        <td><span class="line-bottom"></span></td>
                        <td>Prievidza klienti, výnimka športové kluby</td>
                    </tr>
                    </tbody>
                </table>
            </section>
          </div>
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end footer__inner -->
    
    <div class="footer__menu clearfix">
      <div class="container"> <a href="index.php" class="logo pull-left"> <img class="logo__img" src="img/logo_footer.png" height="44" width="270" alt="Logo"> </a>
        <ul class="pull-right">
          <li><a href="index.php">DOMOV</a></li>
          <li><a href="about-1.html">O MNE</a></li>
          <li><a href="appointment-form.html">REZERVAČNÝ FORMULÁR</a></li>
          <li><a href="contact.html">KONTAKT</a></li>
        </ul>
      </div>
      <!-- end container --> 
    </div>
    <!-- end footer__menu -->
    
    <div class="footer__bottom"> <span class="copyright">© Copyrights 2015 ReconnectYou</span>
    </div>
  </footer>
</div>
<!-- end layout-theme --> 

<span class="scroll-top bg-color_second"> <i class="fa fa-angle-up"> </i></span> 

<!--HOME SLIDER--> 
<script src="plugins/iview/js/iview.js"></script> 
  <script src="plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<!-- SCRIPTS --> 
<script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="plugins/bxslider/jquery.bxslider.min.js"></script> 
<script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
<script src="plugins/datetimepicker/jquery.datetimepicker.js"></script> 
<script src="plugins/jelect/jquery.jelect.js"></script> 
<script src="plugins/nouislider/jquery.nouislider.all.min.js"></script> 

<!-- Loader --> 
<script src="plugins/loader/js/classie.js"></script> 
<script src="plugins/loader/js/pathLoader.js"></script> 
<script src="plugins/loader/js/main.js"></script> 
<script src="js/classie.js"></script> 
<!--THEME--> 
<script src="js/cssua.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/custom.js"></script>
<?php
session_start();

if(isset($_SESSION['email_sent'])) {
?>
    <script>
        $(document).ready(function() {
            alert('Váš email bol úspešne odoslaný.')
        })
    </script>
<?php
    unset($_SESSION['email_sent']);
}
?>
</body>
</html>
