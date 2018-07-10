<?php $root = $_SERVER["DOCUMENT_ROOT"];?>
<?php
$visible_from = 0;
require_once "$root/visible_from.php";

//if (SK and !ADMINISTRATOR_IZUS) hdr("$root/"); // zatím ne pro SK
if (SK) hdr("./sk/"); // zatím ne pro SK

$h2 = "GDPR - Obecné nařízení o ochraně osobních údajů";
require "$root/head.php";
?>
  <style type="text/css">
  /* <![CDATA[ */
    .gdpr #content p { text-align: justify; }
    .gdpr #content ul { margin-bottom: 1em; }
    .gdpr #content table ul.seznam_zmen { margin: 0.5em; }
    .gdpr #content ol ol { list-style-type: lower-alpha; }
    .gdpr #content .navrhovany_harmonogram_cinnosti td { vertical-align: baseline; padding-bottom: 1em; }
    .gdpr #content .ikona { vertical-align: top; padding-right: 0.5em; }
    .gdpr #content table { margin: 0 0 1em 0; border: 1px black solid; border-collapse: separate; border-spacing: 0; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px; background: white; }
    .gdpr #content table tr:hover:not(:first-child) { background: <?php echo $barva11;?>; }
    .gdpr #content table th { height: 2em; padding: 0 0.5em; border-right: 1px #B8C9DD solid; vertical-align: middle; }
    .gdpr #content table td.datum { text-align: right; }
    .gdpr #content table td { height: 2em; padding: 0 0.5em; border-top: 1px #B8C9DD solid; border-right: 1px #B8C9DD solid; vertical-align: middle; }
    .gdpr #content table th:last-child, .zaci #content table td:last-child { border-right: none !important; }
    .gdpr #content table td:before { display: none; }

    <?php if (GDPRDOMENA or !ID_USER) { ?>
    #page.gdpr #accessibility {
      display: none;
    }

    #page.gdpr #header {
      display: block;
      float: right;
    }

    #header p#motto {
      display: none;
    }

    #page.gdpr #menu {
      display: none;
    }

    #page.gdpr #left_column {
      display: none;
    }

    #page.gdpr #footer {
      display: none;
    }

    #page.gdpr #prepnout_do_zus {
      display: none;
    }

    #page.gdpr p#ikony {
      display: none;
    }

    body {
      background: white;
    }

    #page.gdpr #content {
      width: 100%;
      float: none;
    }

    <?php } ?>

    .btn-primary {
      color: #fff;
      background-color: #337ab7;
      border-color: #2e6da4;
    }
    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
    }

  /* ]]> */
  </style>
<?php
script("kontakt");
require "$root/header.php";
?>
    <img src="/img/gdpr.png" alt="GDPR" width="618" height="514" style="width: auto; height: 20em; float: right; margin: 0 6em 0.5em 1em;" />
    <!-- <a href="/gdpr/dotaznik/www/" style="margin: auto; display: block;">Vstupní dotazník</a>-->
<?php if (ID_USER) { ?>
    <a href="/gdpr/dotaznik/www/dialog.php?id=1" style="float: right; margin-right: 2em;"><button class="btn btn-primary" id="btn-addDialog">Vstupní dotazník</button></a>
<?php } //if (ID_USER) { ?>
    <div id="obsah" style="width: 30em;">
      <ol>
        <li><a href=".">Co je GDPR?</a></li>
        <li><a href="?kapitola=jake_povinnosti_uklada_gdpr_skolam">Jaké povinnosti ukládá GDPR školám?</a></li>
<?php if (!GDPRDOMENA) { ?>
        <li><a href="?kapitola=vyresi_vam_izus_gdpr">Vyřeší Vám iZUŠ GDPR?</a></li>
<?php } //if (!GDPRDOMENA) { ?>
        <li><a href="?kapitola=s_cim_vam_muzeme_pomoct">S čím Vám můžeme pomoct?</a>
          <ol>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#audit">Audit práce s osobními údaji na základě vstupního dotazníku</a></li>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#vypracovani_dokumentu">Vypracování dokumentů</a></li>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#skoleni_zamestnancu_na_gdpr">Školení zaměstnanců na GDPR</a></li>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#kontrola_dodrzovani_narizeni">Kontrola dodržování nařízení</a></li>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#poverenec_pro_ochranu_osobnich_udaju">Pověřenec pro ochranu osobních údajů</a></li>
<?php if (!GDPRDOMENA) { ?>
            <li><a href="?kapitola=s_cim_vam_muzeme_pomoct#vymaz_osobnich_udaju">Výmaz osobních údajů</a></li>
<?php } //if (!GDPRDOMENA) { ?>
          </ol>
        </li>
        <li><a href="?kapitola=navrhovany_harmonogram_cinnosti">Navrhovaný harmonogram činností</a>
        <!-- <li><a href="?kapitola=cim_zacit">Školení GDPR 28. listopadu 2017 v Praze</a> -->
        <!-- <li><a href="?kapitola=cim_zacit">Školení GDPR 12. prosince 2017 v Horním Slavkově</a> -->
        <li><a href="?kapitola=cenik_sluzeb">Ceník služeb</a>
        <li><a href="?kapitola=objednavka_sluzeb">Objednávka služeb</a>
<?php if (CZ) { ?>
        <li><a href="?kapitola=ke_stazeni">Ke stažení</a></li>
        <li><a href="?kapitola=kontakt">Kontakt</a></li>
<?php } //if(CZ) { ?>
<?php if(ADMINISTRATOR_IZUS) { ?>
        <li><a href="?kapitola=prezentace_skoleni">Prezentace školení</a></li>
<?php } //if(ADMINISTRATOR_IZUS) { ?>
      </ol>
    </div>
<?php if (!$_GET["kapitola"]) { ?>

    <h3 id="co_je_gdpr">Co je GDPR?</h3>

    <p>Obecné nařízení na ochranu osobních údajů neboli GDPR (General Data Protection Regulation) je dosud nejvíce uceleným souborem pravidel na ochranu dat na světě. GDPR se dotkne každého, kdo shromažďuje nebo zpracovává osobní údaje Evropanů. Cílem GDPR je chránit digitální práva občanů EU. Nařízení míří i&nbsp;do <strong>škol, které zacházejí s&nbsp;osobními údaji zaměstnanců, žáků a&nbsp;jejich zákonných zástupců</strong>. Budou se v&nbsp;dohledné době potýkat s&nbsp;nutností upravit způsob zpracovávání osobních údajů. V&nbsp;případě závažného porušení pak budou hrozit vysoké pokuty (až 20 milionů EUR).</p>

    <p>GDPR začne v&nbsp;celé EU platit jednotně od <strong>25. května 2018</strong>. V&nbsp;Česku tak nahradí současnou právní úpravu ochrany osobních údajů v&nbsp;podobě směrnice 95/46/ES a&nbsp;související zákon č.&nbsp;101/2000 Sb., o&nbsp;ochraně osobních údajů. Práva a&nbsp;povinnosti v&nbsp;současném zákoně o&nbsp;ochraně osobních údajů budou nahrazena právy a&nbsp;povinnostmi vyplývajícími z&nbsp;Obecného nařízení. To, že nová pravidla byla přijata formou evropského nařízení, znamená především jejich jednotnou platnost ve všech státech EU, aby je národní vlády a&nbsp;zákonodárci nemohli jakkoli ohýbat a&nbsp;přizpůsobovat místním zájmům nebo lobbistům. Období od dubna 2016, kdy bylo GDPR schváleno, do května 2018, kdy vstoupí v&nbsp;platnost, je určeno přípravě. Během této doby musí všichni, kterých se nařízení týká, <strong>zrevidovat své informační systémy a&nbsp;postupy při nakládání s&nbsp;osobními údaji</strong>.</p>

    <p>Dosud byl v&nbsp;oblasti ochrany údajů hlavním českým regulátorem <strong>Úřad pro ochranu osobních údajů</strong> (ÚOOÚ), který by tuto funkci zastávat i&nbsp;nadále. Přibudou mu ale pravomoci odrážející závažnost celé reformy a&nbsp;zároveň <strong>bude částečně podřízen Evropskému sboru pro ochranu osobních údajů</strong> (EDPB). Nastane-li pak jakákoli pochybnost o&nbsp;rozhodnutí českého regulátora, vždy zde bude existovat možnost obrátit se na EDPB s&nbsp;odvoláním.</p>
<?php } ///if (!$_GET["kapitola"]) { ?>
<?php if ($_GET["kapitola"] == "jake_povinnosti_uklada_gdpr_skolam") { ?>

    <h3 id="jake_povinnosti_uklada_gdpr_skolam">Jaké povinnosti ukládá GDPR školám?</h3>

    <ul>
      <li>implementace záměrné a&nbsp;nezbytné ochrany dat</li>
      <li>vypracování posouzení vlivu na ochranu osobních údajů, v&nbsp;angličtině DPIA neboli Data Protection Impact Assessment</li>
      <li>jmenování pověřence pro ochranu osobních údajů neboli DPO (Data Protection Officer)</li>
      <li>zavedení tzv. pseudonymizace osobních údajů</li>
      <li>vedení záznamů o&nbsp;činnostech zpracování</li>
      <li>konzultace s&nbsp;dozorovým orgánem před samotným zpracováním osobních údajů</li>
    </ul>

    <p style="font-size: 0.6em; text-align: right;">Zdroj: gdpr.cz</p>
<?php } ///if ($_GET["kapitola"] == "jake_povinnosti_uklada_gdpr_skolam") { ?>
<?php if ($_GET["kapitola"] == "vyresi_vam_izus_gdpr") { ?>

    <h3 id="vyresi_vam_izus_gdpr">Vyřeší Vám iZUŠ GDPR?</h3>

    <p><strong>Částečně ano.</strong> iZUŠ již od svého počátku nebral osobní údaje na lehkou váhu, <strong>zabezpečil je a&nbsp;stanovil jasná pravidla</strong>, jak s&nbsp;nimi má být zacházeno. Respektování pravidel je třeba ve školách kontrolovat. A&nbsp;také je třeba si uvědomit, že osobní údaje zaměstnanců, žáků a&nbsp;jejich zákonných zástupců nejsou jen v&nbsp;iZUŠ. Zajisté je máte i&nbsp;<strong>v&nbsp;papírové formě</strong> v&nbsp;nejrůznějších seznamech a&nbsp;v&nbsp;elektronické podobě v&nbsp;dokumentech <strong>v&nbsp;Excelu, Wordu</strong> a&nbsp;dalších.</p>

    <p style="margin-bottom: 0;">Jednoduchou radou je <strong>omezit výskyt osobních údajů jinde než v&nbsp;iZUŠ</strong>. Co Vám to přinese:</p>

    <ul>
      <li>zbavíte se odpovědnosti, smluvně ji přenesete na firmu Sensio.cz s.r.o.</li>
      <li>mnohem větší kontrola nad možným únikem údajů</li>
      <li>mnohem snadnější výmaz osobních údajů, pokud o&nbsp;to osoba požádá</li>
      <li>certifikáty zabezpečení</li>
      <li>ochrana před viry - vše je v cloudu, není možná nákaza virem</li>
      <li>ochrana před <a class="external_link" href="https://cs.wikipedia.org/wiki/Ransomware" title="Co je ransomware? (Wikipedia)">ransomware</a> - šifruje jen lokální, případně síťová data, nikoli cloud</li>
    </ul>
<?php } ///if ($_GET["kapitola"] == "vyresi_vam_izus_gdpr") { ?>
<?php if ($_GET["kapitola"] == "s_cim_vam_muzeme_pomoct") { ?>

    <h3 id="s_cim_vam_muzeme_pomoct">S čím Vám můžeme pomoct?</h3>

    <h4 id="audit">Audit práce s osobními údaji na základě vstupního dotazníku</h4>

    <p>MŠMT vydalo prováděci předpis, jak zacházet s&nbsp;osobními údaji na školách. Bude třeba zjistit, kde všude se osobní údaje vyskytují, kdo a&nbsp;jak s&nbsp;nimi pracuje, jak zabráníte možnému úniku osobních údajů a&nbsp;jak zajistíte výmaz osobních údajů, pokud o&nbsp;to osoba požádá. Jsme schopni provést <strong>audit</strong> na Vaší škole na základě propracovaného a podrobného <?php if (ID_USER) { ?><a href="/gdpr/dotaznik/www/">dotazníku</a><?php } else { ?><strong>dotazníku</strong><?php } ?>.</p>

    <h4 id="vypracovani_dokumentu">Vypracování dokumentů</h4>
    <p>Po provedení <strong>auditu</strong> na Vaší škole bude třeba vypracovat <strong>potřebné dokumenty</strong> (směrnice, metodiky, informované souhlasy, smlouvy). V&nbsp;této oblasti máme specialisty na školskou legislativu, IT a ekonomiku.</p>

    <h5>Vnitřní směrnice a metodické pokyny</h5>
    <p>Stávající vnitřní směrnice bude třeba zrevidovat. Bude třeba vypracovat metodické pokyny, kde se přesně stanoví jakým způsobem se bude s osobními údaji nakládat.</p>

    <h5>Souhlasy zaměstnanců, žáků a&nbsp;jejich zákonných zástupců se zpracováním osobních údajů</h5>
    <p>Zaměstnanci, žáci a&nbsp;jejich zákonní zástupci souhlasili se zpracováním osobních údajů, ale pouze dle zákona č.&nbsp;101/2000 Sb., který nezahrnuje všechny náležitosti GDPR. Bude nutné všechny informovat o&nbsp;umístění osobních údajů (<?php if (!GDPRDOMENA) { ?>iZUŠ, <?php } //if (!GDPRDOMENA) { ?>tištěné dokumenty, počítače, tablety, mobilní telefony ad.), kdo k&nbsp;nim má přístup a&nbsp;jak s&nbsp;nimi zachází. <?php if (!GDPRDOMENA) { ?>Tuto záležitost vůči žákům a rodičům můžete poměrně snadno vyřešit použítím Souhlasů zákonných zástupců v&nbsp;iZUŠ.<?php } //if (!GDPRDOMENA) { ?></p>

    <h5>Smlouvy</h5>
    <p>I smlouvy s dodavateli služeb (IT, energie, externí firmy) je třeba zkontrolovat a uvést do souladu s Nařízením.</p>

    <h4 id="skoleni_zamestnancu_na_gdpr">Školení zaměstnanců na GDPR</h4>

    <p>S&nbsp;nově vytvořenými směrnicemi budete muset své zaměstnance seznámit, ukázat jim možná nebezpečí úniku osobních údajů a&nbsp;poučit je, jak tomu zabránit. <?php if (!GDPRDOMENA) { ?>Nejen při práci s&nbsp;iZUŠ se změní zacházení zaměstnanců s&nbsp;osobními údaji. <?php } //if (!GDPRDOMENA) { ?> A&nbsp;není možné povinnosti odkládat až do května, na nový způsob práce je nutné se řádně připravit. Školení zaměstnanců jsme připraveni Vám také zajistit.</p>

    <h4 id="kontrola_dodrzovani_narizeni">Kontrola dodržování nařízení</h4>

    <p>Jakmile seznámíte zaměstnance s novými metodikami a všemi potřebnými kroky pro úspěšné zavedení práce s osobními údaji, bude potřeba zkontrolovat reálnou situaci. Tedy zda všichni navržené metodiky dodržují, zda se zavedla nápravná opatření atd. Tento krok se dá definovat jako „generálka“ nanečisto před odstrým startem 25.&nbsp;5.&nbsp;2018. Budete tak mít jistotu, že máte vše nachystáno přesně dle Nařízení.</p>

    <h4 id="poverenec_pro_ochranu_osobnich_udaju">Pověřenec pro ochranu osobních údajů</h4>

    <p>Jednou z&nbsp;povinností GDPR je jmenování pověřence pro ochranu osobních úvajů (tzv. DPO). Nedoporučuje se, aby jím byl <strong>někdo ze stávajících zaměstnanců školy</strong>, který již s&nbsp;osobními údaji pracuje. Škola musí přijmout nového zaměstnance pouze na tuto pozici, nebo řešit povinnost externě. Můžeme Vám pověřence zajistit. Bude pravidelně navštěvovat Vaši školu, kontrolovat dodržování metodik a&nbsp;vypracovávat monitorovací zprávy.</p>
<?php if (!GDPRDOMENA) { ?>
    <h4 id="vymaz_osobnich_udaju">Výmaz osobních údajů</h4>

    <p>Jednou z&nbsp;nejproblematičtějších oblastí GDPR je výmaz osobních údajů. Když osoba podá žádost na výmaz osobních údajů (svých nebo svého dítěte), jste povinni žádosti vyhovět nebo podat vysvětlení, že je ze zákona nezbytné osobní údaje dále uchovávat a&nbsp;k&nbsp;jakému datu bude výmaz proveden. Výmazem se nemyslí jen smazání údaje ze školní matriky, ale také <strong>odstranění všech jeho výskytů</strong> v&nbsp;tištěných a&nbsp;elektronických dokumentech, mobilních telefonech, diářích, zálohách apod. Při řešení těchto situací Vám budeme maximálně nápomocní, protože zřejmě již úderem 25. května 2018 se těchto žádostí vyskytne velké množství.</p>
<?php } //if (!GDPRDOMENA) { ?>
<?php } ///if ($_GET["kapitola"] == "s_cim_vam_muzeme_pomoct") { ?>
<?php if ($_GET["kapitola"] == "navrhovany_harmonogram_cinnosti") { ?>

    <h3 id="navrhovany_harmonogram_cinnosti">Navrhovaný harmonogram činností</h3>

    <p>Tím, že se GDPR dotkne škol ještě v&nbsp;tomto školním roce, je třeba se na něj zavčas připravit. Nemůžeme očekávat, že se za běžného chodu školy vše stihne za měsíc nebo za dva. Přicházíme tedy s&nbsp;návrhem harmonogramu činností, jak vše v&nbsp;klidu zvládnout.</p>

    <img src="/img/clock-sand-gold.png" alt="GDPR" width="250" height="414" style="width: auto; height: 15em; float: right; margin: 0 3em 1em 1em;" />
    
    <table class="navrhovany_harmonogram_cinnosti">
      <tr>
       <td>Listopad 2017</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Školení ředitelů, seznámení s&nbsp;GDPR</td>
      </tr>
      <tr>
       <td>Prosinec 2017</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Úprava obecných metodik pro ZUŠ na základě prováděcího předpisu MŠMT</td>
      </tr>
      <tr>
       <td>Leden 2018</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Audit práce s&nbsp;osobními údaji přímo ve škole</td>
      </tr>
      <tr>
       <td>Únor 2018</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Konzultace vypracovaných metodik na míru dané škole, přijmutí opatření (sběr souhlasů)</td>
      </tr>
      <tr>
       <td>Březen 2018</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Školení zaměstnanců na GDPR</td>
      </tr>
      <tr>
       <td>Duben 2018</td>
       <td><img class="ikona" src="/img/ikony/check-green.png" alt="GDPR" width="20" height="20" /> Kontrola dodržování pravidel pověřencem</td>
      </tr>
      <tr>
       <td>Květen 2018</td>
       <td><img class="ikona" src="/img/ikony/face-smile.png" alt="GDPR" width="20" height="20" /> Jste na GDPR připraveni</td>
      </tr>
    </table>
<?php } ///if ($_GET["kapitola"] == "navrhovany_harmonogram_cinnosti") { ?>
<?php if ($_GET["kapitola"] == "prezentace_skoleni") { ?>

    <h3>Prezentace ze školení GDPR</h3>
    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQ0i8Xreqd2_INNGZEGowSatFNgStFAdGNBlTieIyDLaXXq9pRUQs-00lqEQP6eHAEnr-hmU5ZWq4bp/embed?start=true&loop=false&delayms=15000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    <br /><br />

<?php } ///if ($_GET["kapitola"] == "cim_zacit") { ?>
<?php if ($_GET["kapitola"] == "cim_zacit") { ?>

    <!-- <h3 id="cim_zacit">Školení GDPR 10. listopadu 2017 v Olomouci</h3> 

    <h3 id="cim_zacit">Školení GDPR 28. listopadu 2017 v Praze</h3>         -->
    <h3 id="cim_zacit">Školení GDPR 12. prosince 2017 v Horním Slavkově</h3>         

    <p>Sejdeme se dne <strong>12. prosince 2017 v&nbsp;9.00 v&nbsp;Horním Slavkově</strong>, kde proběhne další školení v oblasti GDPR <strong>pro ředitele a&nbsp;zástupce ředitelů ZUŠ</strong>. Vysvětlíme Vám, co obnáší proces zajištění souladu běžné praxe školy s&nbsp;novou legislativou týkající se ochrany osobních údajů (GDPR).</p>

    <p><strong>Školení Vás kompletně seznámí s&nbsp;Obecným nařízením o&nbsp;ochraně osobních údajů</strong> a&nbsp;povinnostmi, které z&nbsp;něj pro školy vyplývají. Dozvíte se, jaká práva mají subjekty údajů a&nbsp;jaké povinnosti mají správci a&nbsp;zpracovatelé osobních údajů. Lektor vám nastíní <strong>modelové situace</strong>, kterými budete procházet v&nbsp;rámci procesu implementace GDPR pravidel. Probrána bude strategie přístupu, organizační a&nbsp;technická opatření a&nbsp;další aspekty reálné implementace na školách. Očekáváme <strong>Vaše dotazy</strong> k&nbsp;diskuzi.</p>

    <p><strong>Harmonogram školení</strong><br />
    Začátek v 9.00<br /> 
    Délka školení 3 hod.<br />
    Místo konání:<br />
    <!-- 
    - adresa Starochodovská 1360/78, 149 00 Praha 4 Chodov<br />
    - název organizace Restaurace na Sádce<br />
    - web organizace <a href="http://nasadce.com/">http://nasadce.com/</a><br />
    -->
    - adresa Pluhova 497, 357 31 Horní Slavkov<br />
    - název organizace ZUŠ Horní Slavkov<br />
    - web organizace <a href="http://www.zushslavkov.cz/">http://www.zushslavkov.cz/</a><br />
    </p>
    <p><strong>Občerstvení</strong> o&nbsp;přestávce zajištěno (káva, čaj, minerálka, něco k&nbsp;zakousnutí). Předpokládaný <strong>konec ve 12.00</strong>. <br />Těší se na Vás lektor MgA.&nbsp;Ondřej Kratochvíl a Ing. Jan Tobolík.</p>
<?php } ///if ($_GET["kapitola"] == "cim_zacit") {?>

<?php if ($_GET["kapitola"] == "cenik_sluzeb") { ?>

    <h3>Ceník služeb GDPR</h3>
    Chcete využít naše služby?<br />
    <br />
    Dáváme vám k dispozici <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio.pdf" target="_blank">aktuální ceník</a> našich služeb GDPR platný od 1. 1. 2018 a aktualizovaný dne 15. 6. 2018.<br /><br />

    <h4>Seznam změn v ceníku:</h4>
    <table>
     <tr>
      <th>Datum změny</th>
      <th>Popis změn</th>
      <th>&nbsp;</th>
     </tr>
     <tr>
      <td class="datum">15. 6. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>doplnění dalších konzultačních služeb a upřesnění popisu služby Pověřence na ochranu osobních údajů</li>
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
     <tr>
      <td class="datum">22. 5. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>zveřejnění cen za služby Pověřence na ochranu osobních údajů</li>
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201804.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
     <tr>
      <td class="datum">25. 4. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>doplnění položky P11 a P12 </li>
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201803.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
     <tr>
      <td class="datum">12. 2. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>ceny zůstaly <strong>beze změny</strong></li>
          <li>doplnili jsme podrobný popis a rozpis ceníkových položek v rámci jednotlivých služeb</li>
          <li>byla přidána „Sleva při objednání celého portfolia služeb“ ve výši 4 000 Kč bez DPH (4 840 Kč s DPH)</li>
          <li>pro neplátce DPH byly pro lepší orientaci přidány všechny částky se započtenou DPH</li>
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201802.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
     <tr>
      <td class="datum">1. 1. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>Prvotní Ceník GDPR služeb</li>
          <!-- <li>Nemáme co skrývat, původní Ceník je pro vaše porovnání</li> -->
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201801.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
    </table>
    <!--
    <h4>Aktualizace ceníku</h4>
    Na základě vašich požadavků a připomínek jsme dne 12. 2. 2018 vydali aktualizovanou verzi s těmito <strong>změnami:</strong><br />
    <ul>
      <li><strong>nedošlo </strong>k žádné úpravě cen služeb</li>
      <li>doplnili jsme podrobný popis a rozpis ceníkových položek v rámci jednotlivých služeb</li>
      <li>byla přidána „Sleva při objednání celého portfolia služeb“ ve výši 4 000 Kč bez DPH (4 840 Kč s DPH)</li>
      <li>pro neplátce DPH byly pro lepší orientaci přidány všechny částky se započtenou DPH</li>
    </ul>
    <br />
    Nemáme co skrývat, původní Ceník je pro vaše porovnání ke stažení <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201801.pdf" target="_blank">zde</a>.
    <br /><br />
    -->
<?php } ///if ($_GET["kapitola"] == "cim_zacit") { ?>

<?php if ($_GET["kapitola"] == "objednavka_sluzeb") { ?>

    <h3>Objednávka služeb GDPR</h3>
<?php if (GDPRDOMENA) { ?>
    <!-- <p>Přihlášky prosím zasílejte e-mailem na <a href="/poslat_zpravu.php">gdpr@sensio.cz</a></p> -->
    <!-- <p>Přihlášky prosím zasílejte e-mailem na <a href="mailto:gdpr@sensio.cz?subject=Přihláška%20na%20školení%20GDPR">gdpr@sensio.cz</a><br /> -->
    <p>Objednávky prosím zasílejte e-mailem na <a href="mailto:gdpr@sensio.cz?subject=Objednávka%20služeb%20GDPR">gdpr@sensio.cz</a><br />
    <br />
    <a href="http://www.sensio.cz/" title="Sensio.cz s.r.o."><img src="/img/logo_sensio_barevne_v_pruhledne.png" alt="Logo Sensio.cz s.r.o." style="width: 200px; height: auto;" width="400" height="110" /></a></p>
<?php }
else { ?>
    <!-- <p><button type="button" onclick="javascript:self.location.href='/skoly/dokumenty/skoleni/?id_skoleni=313'" title="Školení"><strong>Přihlaste se zde</strong></button></p> -->
    <p>Objednávky prosím zasílejte e-mailem na <a href="mailto:gdpr@sensio.cz?subject=Objednávka%20služeb%20GDPR">gdpr@sensio.cz</a><br />
<?php } //if (GDPRDOMENA) { ?>

<?php } ///if ($_GET["kapitola"] == "cim_zacit") { ?>

<?php if (CZ and $_GET["kapitola"] == "kontakt") { ?>

    <h3>Kontakt</h3>
    <div id="administrativni_pracovnice">
      <h3>Vedoucí oddělení GDPR</h3>

      <p>Potřebujete zajistit audit GDPR, zjistit cenu pro Vaši školu či sjednat termín školení?</p>

      <p>Bc. Antonín Pražák<br />
      e-mail: <?php format_email("gdpr@sensio.cz");?><br />
      Telefon: <strong>+420&nbsp;737&nbsp;299&nbsp;398</strong> (8.00&ndash;16.30)
      </p>
    </div>

    <div id="administrativni_pracovnice">
      <h3>Auditoři GDPR</h3>
      <h4>Region Morava a&nbsp;Slezko</h4>

      <!-- <p>Potřebujete zajistit audit GDPR, zjistit cenu pro Vaši školu či sjednat termín školení?</p> -->

      <p>Bc. Michal Řepa<br />
      e-mail: <?php format_email("michal.repa@sensio.cz");?><br />
      telefon: +420&nbsp;737&nbsp;299&nbsp;391 (8.00&ndash;16.30)
      </p>
      <p>Evghenii Diomin<br />
      e-mail: <?php format_email("evghenii.diomin@sensio.cz");?><br />
      <!-- Telefon: +420&nbsp;725&nbsp;044&nbsp;875 -->
      <!-- <p>Mgr. Eva Kleiberová<br />
      e-mail: <?php format_email("eva.kleiberova@sensio.cz");?><br /> -->
      <!-- Telefon: +420&nbsp;725&nbsp;044&nbsp;875 -->
      </p>
    </div>

    <div id="administrativni_pracovnice">
      <h3>Auditoři GDPR</h3>
      <h4>Region Čechy</h4>

      <!-- <p>Potřebujete zajistit audit GDPR, zjistit cenu pro Vaši školu či sjednat termín školení?</p> -->
      <!--
      <p>Daniel Bleha<br />
      e-mail: <?php format_email("daniel.bleha@sensio.cz");?><br />
      -->
      </p>
      <p>Jana Valentová<br />
      e-mail: <?php format_email("jana.valentova@sensio.cz");?><br />
      <!-- Telefon: +420&nbsp;725&nbsp;044&nbsp;875 -->
      </p>
    </div>

    <div id="administrativni_pracovnice">
      <h3>Odborný poradce - školská legislativa</h3>

      <!-- <p>Potřebujete zajistit audit GDPR, zjistit cenu pro Vaši školu či sjednat termín školení?</p> -->

      <p>MgA. Ondřej Kratochvíl<br />
      e-mail: <?php format_email("ondrej.kratochvil@sensio.cz");?><br />
      <!-- Telefon: +420&nbsp;725&nbsp;044&nbsp;875 -->
      </p>

      <p>Mgr. Eva Kleiberová<br />
      e-mail: <?php format_email("eva.kleiberova@sensio.cz");?><br />
      </p>
    </div>

    <div id="administrativni_pracovnice">
      <h3>Odborný poradce - IT</h3>

      <!-- <p>Potřebujete zajistit audit GDPR, zjistit cenu pro Vaši školu či sjednat termín školení?</p> -->

      <p>Ing. Jan Tobolík<br />
      e-mail: <?php format_email("jan.tobolik@sensio.cz");?><br />
      <!-- Telefon: +420&nbsp;725&nbsp;044&nbsp;875 -->
      </p>
    </div>

<?php } ///if ($_GET["kapitola"] == "kontakt") { ?>

<?php if ($_GET["kapitola"] == "ke_stazeni") { ?>

    <h3>Ke stažení</h3>
    Zde budeme dávat k dispozici dokumenty ke stažení<br />
    <br />

    <h4>Dokumenty ke stažení:</h4>
    <table>
     <tr>
      <th>Datum vydání/změny</th>
      <th>Popis dokumentu</th>
      <th>&nbsp;</th>
     </tr>
     <tr>
      <td class="datum">19. 2. 2018</td>
      <td>
        <ul class="seznam_zmen">
          <li>Obecný metodický pokyn pro základní a základní umělecké školy</li>
        </ul>
      </td>
      <td>
        <a href="/gdpr/ke_stazeni/GDPR_obecny_metodicky_pokyn_pro_skolstvi.pdf" target="_blank"><img src="/img/ikony/pdf.png" width="32" height="32" class="ikona">Zobrazit</a>
      </td>
     </tr>
    </table>
    <!--
    <h4>Aktualizace ceníku</h4>
    Na základě vašich požadavků a připomínek jsme dne 12. 2. 2018 vydali aktualizovanou verzi s těmito <strong>změnami:</strong><br />
    <ul>
      <li><strong>nedošlo </strong>k žádné úpravě cen služeb</li>
      <li>doplnili jsme podrobný popis a rozpis ceníkových položek v rámci jednotlivých služeb</li>
      <li>byla přidána „Sleva při objednání celého portfolia služeb“ ve výši 4 000 Kč bez DPH (4 840 Kč s DPH)</li>
      <li>pro neplátce DPH byly pro lepší orientaci přidány všechny částky se započtenou DPH</li>
    </ul>
    <br />
    Nemáme co skrývat, původní Ceník je pro vaše porovnání ke stažení <a href="/gdpr/ke_stazeni/Cenik_GDPR_Sensio_201801.pdf" target="_blank">zde</a>.
    <br /><br />
    -->
<?php } ///if ($_GET["kapitola"] == "cim_zacit") { ?>


<?php
if ($_GET["kapitola"] != "kontakt") { ?>

    <p>Kam dál? &nbsp;
<?php if (!$_GET["kapitola"]) { ?>
    2. <a href="?kapitola=jake_povinnosti_uklada_gdpr_skolam">Jaké povinnosti ukládá GDPR školám?</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "jake_povinnosti_uklada_gdpr_skolam") { ?>
    3. <a href="?kapitola=vyresi_vam_izus_gdpr">Vyřeší Vám iZUŠ GDPR?</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "vyresi_vam_izus_gdpr") { ?>
    4. <a href="?kapitola=s_cim_vam_muzeme_pomoct">S čím Vám můžeme pomoct?</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "s_cim_vam_muzeme_pomoct") { ?>
    5. <a href="?kapitola=navrhovany_harmonogram_cinnosti">Navrhovaný harmonogram činností</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "navrhovany_harmonogram_cinnosti") { ?>
    6. <a href="?kapitola=cenik_sluzeb">Ceník služeb</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "cenik_sluzeb") { ?>
    7. <a href="?kapitola=objednavka_sluzeb">Objednávka služeb</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "objednavka_sluzeb") { ?>
    8. <a href="?kapitola=ke_stazeni">Ke stažení</a>
<?php } elseif (!GDPRDOMENA and $_GET["kapitola"] == "ke_stazeni") { ?>
    8. <a href="?kapitola=kontakt">Kontakt</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "jake_povinnosti_uklada_gdpr_skolam") { ?>
    3. <a href="?kapitola=s_cim_vam_muzeme_pomoct">S čím Vám můžeme pomoct?</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "s_cim_vam_muzeme_pomoct") { ?>
    4. <a href="?kapitola=navrhovany_harmonogram_cinnosti">Navrhovaný harmonogram činností</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "navrhovany_harmonogram_cinnosti") { ?>
    5. <a href="?kapitola=cenik_sluzeb">Ceník služeb</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "cenik_sluzeb") { ?>
    6. <a href="?kapitola=objednavka_sluzeb">Objednávka služeb</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "objednavka_sluzeb") { ?>
    7. <a href="?kapitola=ke_stazeni">Ke stažení</a>
<?php } elseif (GDPRDOMENA and $_GET["kapitola"] == "ke_stazeni") { ?>
    7. <a href="?kapitola=kontakt">Kontakt</a>
<?php } ?>
    </p>

<?php } ///else { ?>

    <div style="padding: 1em 1em 0.1em 1em; margin-bottom: 1em; background: gold; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;">
      <!-- <a href="?kapitola=cim_zacit"><strong>Školení GDPR 10. listopadu 2017</strong></a> (přihlaste se na bezplatné školení, dozvíte se vše potřebné)</p>-->
      <!-- <a href="?kapitola=cim_zacit"><strong>Školení GDPR 28. listopadu 2017</strong></a> (přihlaste se na školení, dozvíte se vše potřebné)</p> -->
      <!-- <a href="?kapitola=cim_zacit"><strong>Školení GDPR 12. prosince 2017</strong></a> (přihlaste se na školení, dozvíte se vše potřebné)</p> -->
    </div>

<?php require "$root/menu_footer.php";?>