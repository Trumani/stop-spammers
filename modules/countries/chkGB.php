<?php
// generated Saturday 11th of April 2015 04:12:16 PM
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class chkGB extends be_module {
	public $searchname = 'Great Britain';
	public $searchlist = array(
			array( '002024000000', '002032000000' ),
			array( '002096000000', '002104000000' ),
			array( '002120000000', '002128000000' ),
			array( '002216000000', '002224000000' ),
			array( '005044233000', '005044234000' ),
			array( '005044238000', '005044239000' ),
			array( '005062000000', '005062064000' ),
			array( '005063144000', '005063152000' ),
			array( '005064000000', '005072000000' ),
			array( '005077032000', '005077064000' ),
			array( '005081000000', '005082000000' ),
			array( '005083096000', '005083104000' ),
			array( '005101136000', '005101152000' ),
			array( '005102080000', '005102096000' ),
			array( '005102170000', '005102172000' ),
			array( '005102174000', '005102175000' ),
			array( '005102184000', '005102192000' ),
			array( '005144152000', '005144154000' ),
			array( '005151000000', '005152000000' ),
			array( '005152192000', '005152224000' ),
			array( '005153224000', '005153232000' ),
			array( '005172152000', '005172160000' ),
			array( '005175128000', '005175129000' ),
			array( '005175149000', '005175150000' ),
			array( '005175178000', '005175179000' ),
			array( '005175182000', '005175183000' ),
			array( '005175195000', '005175196000' ),
			array( '005175204000', '005175205000' ),
			array( '005175211000', '005175212000' ),
			array( '005175218000', '005175219000' ),
			array( '005198000000', '005198128000' ),
			array( '005199172000', '005199176000' ),
			array( '005231008000', '005231009000' ),
			array( '005231016000', '005231017000' ),
			array( '005231078000', '005231079000' ),
			array( '005249162000', '005249163000' ),
			array( '005250176000', '005250192000' ),
			array( '031003224000', '031004000000' ),
			array( '031006021000', '031006022000' ),
			array( '031006023000', '031006024000' ),
			array( '031006058000', '031006060000' ),
			array( '031022000000', '031022008000' ),
			array( '031024033000', '031024035000' ),
			array( '031024220000', '031024224000' ),
			array( '031025184000', '031025192000' ),
			array( '031048000000', '031056000000' ),
			array( '031072000000', '031088000000' ),
			array( '031132000000', '031132008000' ),
			array( '031170164000', '031170166000' ),
			array( '031172240000', '031173000000' ),
			array( '031185128000', '031186000000' ),
			array( '031186112000', '031186120000' ),
			array( '031187092000', '031187096000' ),
			array( '031193128000', '031193144000' ),
			array( '031205000000', '031206000000' ),
			array( '031210024000', '031210032000' ),
			array( '031216052000', '031216056000' ),
			array( '031221000000', '031221128000' ),
			array( '031222156000', '031222157000' ),
			array( '031222162000', '031222164000' ),
			array( '031222176000', '031222184000' ),
			array( '031222208000', '031222209000' ),
			array( '037009056000', '037009060000' ),
			array( '037009062000', '037009063000' ),
			array( '037026104000', '037026112000' ),
			array( '037122208000', '037122216000' ),
			array( '037122248000', '037123000000' ),
			array( '037123112000', '037123120000' ),
			array( '037128184000', '037128192000' ),
			array( '037130224000', '037130232000' ),
			array( '037139064000', '037139065000' ),
			array( '037152032000', '037152048000' ),
			array( '037152192000', '037153000000' ),
			array( '037157032000', '037157040000' ),
			array( '037157240000', '037157248000' ),
			array( '037188098164', '037188098166' ),
			array( '037188110234', '037188110236' ),
			array( '037203128000', '037203192000' ),
			array( '037205056000', '037205064000' ),
			array( '037220000000', '037220064000' ),
			array( '037235054000', '037235056000' ),
			array( '046016032000', '046016036000' ),
			array( '046017056000', '046017064000' ),
			array( '046023064000', '046023072000' ),
			array( '046028048000', '046028056000' ),
			array( '046031080000', '046031088000' ),
			array( '046032224000', '046033000000' ),
			array( '046037160000', '046037192000' ),
			array( '046038160000', '046038192000' ),
			array( '046064128000', '046065000000' ),
			array( '046208000000', '046209000000' ),
			array( '046226188000', '046226192000' ),
			array( '046233064000', '046233128000' ),
			array( '046235224000', '046235232000' ),
			array( '046236000000', '046236032000' ),
			array( '046244034000', '046244035000' ),
			array( '046249192000', '046249208000' ),
			array( '046252064000', '046252080000' ),
			array( '062003032000', '062003033000' ),
			array( '062007000000', '062008000000' ),
			array( '062056128000', '062056144000' ),
			array( '062073000000', '062073010000' ),
			array( '062170000000', '062173000000' ),
			array( '062173064000', '062173128000' ),
			array( '062216234000', '062216236000' ),
			array( '062232088000', '062232089000' ),
			array( '062232104000', '062232105000' ),
			array( '062233064000', '062233128000' ),
			array( '062244160000', '062244192000' ),
			array( '062249192000', '062250000000' ),
			array( '077068000000', '077068128000' ),
			array( '077074192000', '077074200000' ),
			array( '077075123000', '077075126000' ),
			array( '077075127000', '077075128000' ),
			array( '077086000000', '077086128000' ),
			array( '077092064000', '077092096000' ),
			array( '077095032000', '077095040000' ),
			array( '077095176000', '077095184000' ),
			array( '077107155000', '077107156000' ),
			array( '077233128000', '077233160000' ),
			array( '077234043000', '077234044000' ),
			array( '078086112000', '078086128000' ),
			array( '078110160000', '078110176000' ),
			array( '078129128000', '078130000000' ),
			array( '078143248000', '078143252000' ),
			array( '078144000000', '078152000000' ),
			array( '078157192000', '078157224000' ),
// array('079064000000','079080000000'), // TalkTalk
			array( '079099071000', '079099072000' ),
			array( '079141161000', '079141162000' ),
			array( '079143080000', '079143084000' ),
			array( '079170040000', '079170048000' ),
			array( '080074016000', '080074032000' ),
			array( '080084048000', '080084064000' ),
			array( '080085084000', '080085088000' ),
			array( '080090198000', '080090199000' ),
			array( '080090203000', '080090204000' ),
			array( '080168000000', '080170000000' ),
			array( '080175000000', '080178000000' ),
			array( '080189000000', '080189128000' ),
			array( '080229000000', '080230000000' ),
			array( '080231000000', '080232000000' ),
			array( '080243176000', '080243192000' ),
			array( '080244176000', '080244192000' ),
			array( '080252064000', '080252080000' ),
			array( '081005128000', '081005192000' ),
			array( '081019176000', '081019192000' ),
			array( '081027064000', '081027080000' ),
			array( '081094192000', '081094208000' ),
			array( '081128000000', '081160000000' ),
			array( '081171096000', '081171128000' ),
			array( '081174128000', '081175000000' ),
			array( '081187064000', '081187096000' ),
			array( '081199000000', '081199152000' ),
			array( '081199160000', '081199162000' ),
			array( '082068000000', '082072000000' ),
			array( '082108000000', '082112000000' ),
			array( '082112128000', '082112160000' ),
			array( '082113144000', '082113152000' ),
			array( '082132212000', '082132224000' ),
			array( '082132228000', '082132240000' ),
			array( '082132244000', '082132248000' ),
			array( '082133000000', '082133128000' ),
			array( '082136000000', '082136064000' ),
			array( '082145032000', '082145064000' ),
			array( '082146128000', '082146160000' ),
			array( '082152000000', '082153000000' ),
			array( '082163032000', '082163064000' ),
			array( '082163224000', '082163240000' ),
			array( '082219000000', '082220000000' ),
			array( '083136248000', '083137000000' ),
			array( '083138172064', '083138172096' ),
			array( '083142224000', '083142232000' ),
			array( '083166160000', '083166192000' ),
			array( '083170064000', '083170128000' ),
			array( '083218128000', '083218160000' ),
			array( '083222232000', '083222233000' ),
			array( '083222246000', '083222247000' ),
			array( '083222249000', '083222250000' ),
			array( '083223096000', '083223128000' ),
			array( '084018192000', '084018224000' ),
			array( '084022160000', '084022192000' ),
			array( '084039112000', '084039120000' ),
			array( '084045128000', '084046000000' ),
			array( '084092000000', '084094000000' ),
			array( '085013200000', '085013201000' ),
			array( '085013225000', '085013226000' ),
			array( '085092192000', '085092224000' ),
			array( '085159208000', '085159216000' ),
			array( '085189000000', '085190000000' ),
			array( '085199224000', '085200000000' ),
			array( '085211000000', '085212000000' ),
			array( '085234080000', '085234096000' ),
			array( '085234128000', '085234160000' ),
			array( '086053000000', '086054000000' ),
			array( '086112000000', '086112128000' ),
			array( '086113000000', '086114000000' ),
			array( '086128000000', '086192000000' ),
			array( '087076024000', '087076032000' ),
			array( '087080000000', '087088000000' ),
			array( '087102000000', '087102128000' ),
			array( '087112000000', '087116000000' ),
			array( '087117192000', '087118000000' ),
			array( '087236208000', '087236212000' ),
			array( '087236214000', '087236215000' ),
			array( '087237056000', '087237064000' ),
			array( '087244064000', '087244128000' ),
			array( '088080184000', '088080192000' ),
			array( '088081139000', '088081140000' ),
			array( '088096000000', '088100000000' ),
			array( '088104000000', '088112000000' ),
			array( '088150128000', '088150176000' ),
			array( '088208192000', '088209000000' ),
			array( '089016160000', '089016192000' ),
			array( '089032144000', '089032152000' ),
			array( '089039081000', '089039082000' ),
			array( '089039213000', '089039214000' ),
			array( '089040203000', '089040204000' ),
			array( '089105096000', '089105128000' ),
			array( '089145064000', '089145128000' ),
			array( '089168000000', '089169000000' ),
			array( '089187095000', '089187096000' ),
			array( '089200136000', '089200144000' ),
			array( '089238128000', '089238192000' ),
			array( '089240000000', '089244000000' ),
			array( '090152000000', '090152128000' ),
			array( '090192000000', '090224000000' ),
			array( '090244000000', '090248000000' ),
			array( '091109002000', '091109016000' ),
			array( '091109240000', '091109248000' ),
			array( '091125000000', '091126000000' ),
			array( '091142032000', '091142048000' ),
			array( '091146104000', '091146112000' ),
			array( '091151208000', '091151224000' ),
			array( '091186000000', '091186032000' ),
			array( '091197228000', '091197232000' ),
			array( '091198165000', '091198166000' ),
			array( '091199151000', '091199152000' ),
			array( '091204173000', '091204174000' ),
			array( '091204208000', '091204212000' ),
			array( '091208099000', '091208100000' ),
			array( '091216105000', '091216106000' ),
			array( '091223016000', '091223017000' ),
			array( '091232124000', '091232126000' ),
			array( '091238160000', '091238164000' ),
			array( '092002000000', '092008000000' ),
			array( '092012000000', '092022000000' ),
			array( '092024000000', '092030000000' ),
			array( '092031000000', '092032000000' ),
			array( '092040000000', '092042000000' ),
			array( '092048064000', '092048128000' ),
			array( '092060120000', '092060121000' ),
			array( '093089080000', '093089096000' ),
			array( '093089128000', '093089144000' ),
			array( '093096080000', '093096096000' ),
			array( '093113159000', '093113160000' ),
			array( '093186016000', '093186032000' ),
			array( '093189000000', '093189008000' ),
			array( '094000000000', '094016000000' ),
			array( '094030044000', '094030045000' ),
			array( '094030111000', '094030112000' ),
			array( '094076192000', '094077000000' ),
			array( '094101160000', '094101168000' ),
			array( '094102144000', '094102160000' ),
			array( '094118000000', '094119000000' ),
			array( '094136035000', '094136036000' ),
			array( '094136040000', '094136041000' ),
			array( '094136044000', '094136045000' ),
			array( '094136052000', '094136053000' ),
			array( '094136054000', '094136056000' ),
			array( '094194160000', '094194176000' ),
			array( '094196000000', '094198000000' ),
			array( '094228034000', '094228035000' ),
			array( '094229064000', '094229080000' ),
			array( '094249173000', '094249174000' ),
			array( '094249175000', '094249176000' ),
			array( '095131064000', '095131072000' ),
			array( '095138160000', '095138176000' ),
			array( '095140232000', '095140240000' ),
			array( '095144000000', '095145000000' ),
			array( '095146000000', '095148000000' ),
			array( '095150000000', '095152000000' ),
			array( '095152192000', '095153000000' ),
			array( '095154192000', '095155000000' ),
			array( '095172072000', '095172080000' ),
			array( '095210000000', '095211000000' ),
			array( '109073064000', '109073080000' ),
			array( '109073170128', '109073171000' ),
			array( '109073172128', '109073173000' ),
			array( '109073173040', '109073173048' ),
			array( '109073174000', '109073175000' ),
			array( '109074192000', '109074208000' ),
			array( '109075160000', '109075168000' ),
			array( '109104078000', '109104079000' ),
			array( '109104088000', '109104089000' ),
			array( '109104094000', '109104095000' ),
			array( '109109224000', '109110000000' ),
			array( '109123064000', '109123128000' ),
			array( '109144000000', '109160000000' ),
			array( '109169000000', '109169096000' ),
			array( '109175128000', '109176000000' ),
			array( '109200000000', '109200032000' ),
			array( '109203096000', '109203128000' ),
			array( '109204000000', '109204128000' ),
			array( '109228000000', '109228064000' ),
			array( '109231192000', '109232000000' ),
			array( '109234192000', '109234200000' ),
			array( '109235149000', '109235150000' ),
			array( '109246032000', '109246048000' ),
			array( '129031000000', '129032000000' ),
			array( '129067000000', '129068000000' ),
			array( '130043128000', '130043192000' ),
			array( '130088000000', '130089000000' ),
			array( '130180201000', '130180202000' ),
			array( '130255028000', '130255032000' ),
			array( '131111000000', '131112000000' ),
			array( '134036000000', '134037000000' ),
			array( '134213041208', '134213041216' ),
			array( '135196000000', '135197000000' ),
			array( '138038000000', '138039000000' ),
			array( '139153000000', '139154000000' ),
			array( '141000160000', '141000168000' ),
			array( '146090000000', '146091000000' ),
			array( '146185016000', '146185032000' ),
			array( '148088000000', '148089000000' ),
			array( '149003128000', '149003136000' ),
			array( '149003140000', '149003144000' ),
			array( '149126072000', '149126080000' ),
			array( '149255056000', '149255064000' ),
			array( '149255096000', '149255108000' ),
			array( '149255110000', '149255112000' ),
			array( '152078000000', '152079000000' ),
			array( '159104006000', '159104007000' ),
			array( '162013040000', '162013048000' ),
			array( '162013112000', '162013128000' ),
			array( '162013136000', '162013160000' ),
			array( '162013176000', '162013192000' ),
			array( '163119000000', '163120000000' ),
			array( '164039000000', '164039032000' ),
			array( '164177134140', '164177134144' ),
			array( '164177150000', '164177152000' ),
			array( '164215111000', '164215112000' ),
			array( '176024000000', '176028000000' ),
			array( '176035077000', '176035079000' ),
			array( '176035122000', '176035123000' ),
			array( '176035216000', '176035217000' ),
			array( '176058096000', '176058128000' ),
			array( '176067160000', '176067176000' ),
			array( '176222032000', '176222048000' ),
			array( '176224000000', '177000000000' ),
			array( '178017035000', '178017036000' ),
			array( '178060000000', '178064000000' ),
			array( '178079128000', '178079192000' ),
			array( '178159000000', '178159016000' ),
			array( '178238128000', '178238144000' ),
			array( '185002136000', '185002140000' ),
			array( '185002168000', '185002172000' ),
			array( '185007080000', '185007082000' ),
			array( '185013106000', '185013107000' ),
			array( '185016040001', '185016041000' ),
			array( '185017024000', '185017028000' ),
			array( '185017148000', '185017152000' ),
			array( '185017180000', '185017184000' ),
			array( '185020164000', '185020168000' ),
			array( '185024096000', '185024100000' ),
			array( '185025240000', '185025244000' ),
			array( '185026092000', '185026093000' ),
			array( '185027132000', '185027136000' ),
			array( '185034080000', '185034084000' ),
			array( '185035076000', '185035078000' ),
			array( '185038044128', '185038045064' ),
			array( '185038047000', '185038047128' ),
			array( '185043109000', '185043111000' ),
			array( '185044078000', '185044080000' ),
			array( '185052024000', '185052028000' ),
			array( '185053224000', '185053228000' ),
			array( '185062084000', '185062088000' ),
			array( '188039000000', '188040000000' ),
			array( '188065116000', '188065118000' ),
			array( '188066064000', '188066128000' ),
			array( '188072099000', '188072100000' ),
			array( '188122035000', '188122036000' ),
			array( '188227160000', '188227192000' ),
			array( '192165242000', '192165243000' ),
			array( '192190202000', '192190203000' ),
			array( '193028178000', '193028179000' ),
			array( '193033186000', '193033188000' ),
			array( '193036034000', '193036035000' ),
			array( '193060000000', '193064000000' ),
			array( '193104113000', '193104114000' ),
			array( '193104168000', '193104169000' ),
			array( '193109192000', '193109200000' ),
			array( '193150008000', '193150010000' ),
			array( '193164206000', '193164208000' ),
			array( '193195000000', '193196000000' ),
			array( '193200098000', '193200100000' ),
			array( '193201200000', '193201202000' ),
			array( '193254210000', '193254212000' ),
			array( '194046096000', '194046112000' ),
			array( '194054008000', '194054012000' ),
			array( '194066000000', '194067000000' ),
			array( '194072000000', '194074000000' ),
			array( '194106220000', '194106222000' ),
			array( '194187248000', '194187252000' ),
			array( '195002244000', '195002245000' ),
			array( '195040000000', '195041000000' ),
			array( '195059000000', '195060000000' ),
			array( '195062208000', '195062224000' ),
			array( '195171000000', '195172000000' ),
			array( '195194000000', '195196000000' ),
			array( '195242112000', '195242113000' ),
			array( '195245080000', '195245082000' ),
			array( '212009000000', '212009032000' ),
			array( '212009096000', '212009128000' ),
			array( '212011064000', '212011096000' ),
			array( '212048064000', '212048096000' ),
			array( '212067192000', '212067215000' ),
			array( '212069032000', '212069064000' ),
			array( '212071232000', '212071240000' ),
			array( '212071248000', '212072000000' ),
			array( '212074000000', '212074032000' ),
			array( '212100224000', '212101000000' ),
			array( '212110160000', '212110192000' ),
			array( '212118224000', '212119000000' ),
			array( '212159064000', '212159128000' ),
			array( '212219000000', '212220000000' ),
			array( '212248192000', '212249000000' ),
			array( '213001000000', '213002000000' ),
			array( '213005176000', '213005184000' ),
			array( '213086109000', '213086110000' ),
			array( '213120000000', '213124000000' ),
			array( '213131160000', '213131192000' ),
			array( '213133128000', '213133160000' ),
			array( '213138096000', '213138128000' ),
			array( '213146128000', '213146160000' ),
			array( '213155128000', '213155160000' ),
			array( '213171192000', '213171224000' ),
			array( '213177224000', '213178000000' ),
			array( '213190160000', '213190176000' ),
			array( '213205192000', '213205208000' ),
			array( '213205224000', '213206000000' ),
			array( '213212070000', '213212071000' ),
			array( '213229064000', '213229128000' ),
			array( '213234036000', '213234040000' ),
			array( '213249128000', '213249192000' ),
			array( '217008252000', '217008254000' ),
			array( '217020016000', '217020040000' ),
			array( '217032000000', '217048000000' ),
			array( '217147080000', '217147096000' ),
			array( '217147176000', '217147184000' ),
			array( '217149096000', '217149112000' ),
			array( '217168016000', '217168032000' ),
			array( '217172136000', '217172144000' ),
			array( '217174240000', '217175000000' ),
			array( '217176000000', '217184000000' ),
			array( '217194213000', '217194214000' ),
			array( '217194222000', '217194223000' ),
			array( '217199160000', '217199161000' ),
			array( '217199165000', '217199166000' ),
			array( '217199168000', '217199169000' )
		);
}

?>