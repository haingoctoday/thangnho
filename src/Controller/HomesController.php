<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Session;
use Cake\I18n\Time;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class HomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    //   public function initialize()
    // {
    //       $this->viewBuilder()->layout('agents');
    //     // $this->Auth->allow(['index']);
        
    //    // $this->set('theme', Configure::read('Theme'));
    // }
       public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->layout('homes');
        parent::beforeFilter($event);
        $this->Auth->allow(['index','hotelSearch','testsearch','about','contact','signup','terms']);
    }
    public function index1()
    {
         $this->viewBuilder()->layout('homes');
        //$users = $this->paginate($this->Users);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
          $this->set('title', 'Login - Twt');
    }
  public function index()
    {
         $this->viewBuilder()->layout('login_new');
        //$users = $this->paginate($this->Users);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
           $this->set('title', 'Login - Twt');
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function hotelSearch(){
      $this->viewBuilder()->layout('agents');
        //$users = $this->paginate($this->Users);
      $users = array();

       $this->set('title', 'Agent');

  }



  


  public function testsearch(){
    header('Content-Type: application/json');
 
echo json_encode(array(
    "status" => true,
    "error"  => null,
    "data"   => array(
        "beer"   => array(
            "Hotel"   => array(
                "Affligem Blonde", "Amsterdam Big Wheel", "Amsterdam Boneshaker IPA", "Amsterdam Downtown Brown", "Amsterdam Oranje Summer White",
                "Anchor Liberty Ale", "Beaus Lug Tread Lagered Ale", "Beerded Lady", "Belhaven Best Ale", "Big Rock Grasshopper Wheat",
                "Big Rock India Pale Ale", "Big Rock Traditional Ale", "Big Rock Warthog Ale", "Black Oak Nut Brown Ale", "Black Oak Pale Ale",
                "Boddingtons Pub Ale", "Boundary Ale", "Caffreys", "Camerons Auburn Ale", "Camerons Cream Ale", "Camerons Rye Pale Ale", "Ceres Strong Ale",
                "Cheval Blanc", "Crazy Canuck Pale Ale", "Creemore Springs Altbier", "Crosswind Pale Ale", "De Koninck", "Delirium Tremens",
                "Erdinger Dunkel Weissbier", "Erdinger Weissbier", "Export", "Flying Monkeys Amber Ale", "Flying Monkeys Antigravity",
                "Flying Monkeys Hoptical", "Flying Monkeys Netherworld", "Flying Monkeys Smashbomb", "Fruli", "Fullers Extra Spec Bitter",
                "Fullers London Pride", "Granville English Bay Pale", "Granville Robson Hefeweizen", "Griffon Pale Ale", "Griffon Red Ale",
                "Hacker-Pschorr Hefe Weisse", "Hacker-Pschorr Munchen Gold", "Hockley Dark Ale", "Hoegaarden", "Hops & Robbers IPA", "Houblon Chouffe",
                "James Ready Original Ale", "Kawartha Cream Ale", "Kawartha Nut Brown Ale", "Kawartha Premium Pale Ale", "Kawartha Raspberry Wheat",
                "Keiths", "Keiths Cascade Hop Ale", "Keiths Galaxy Hop Ale", "Keiths Hallertauer Hop Ale", "Keiths Hop Series Mixer",
                "Keiths Premium White", "Keiths Red", "Kilkenny Cream Ale", "Konig Ludwig Weissbier", "Kronenbourg 1664 Blanc", "La Chouffe",
                "La Messager Red Gluten Free", "Labatt 50 Ale", "Labatt Bass Pale Ale", "Lakeport Ale", "Leffe Blonde", "Leffe Brune",
                "Legendary Muskoka Oddity", "Liefmans Fruitesse", "Lions Winter Ale", "Maclays", "Mad Tom IPA", "Maisels Weisse Dunkel",
                "Maisels Weisse Original", "Maredsous Brune", "Matador 2.0 El Toro Bravo", "Mcauslan Apricot Wheat Ale", "Mcewans Scotch Ale",
                "Mill St Belgian Wit", "Mill St Coffee Porter", "Mill St Stock Ale", "Mill St Tankhouse Ale", "Molson Stock Ale", "Moosehead Pale Ale",
                "Mort Subite Kriek", "Muskoka Cream Ale", "Muskoka Detour IPA", "Muskoka Harvest Ale", "Muskoka Premium Dark Ale", "Newcastle Brown Ale",
                "Niagaras Best Blonde Prem", "Okanagan Spring Pale Ale", "Old Speckled Hen", "Ommegang Belgian Pale Ale", "Ommegang Hennepin", "PC IPA",
                "Palm Amber Ale", "Petrus Blonde", "Petrus Oud Bruin Aged Red", "Publican House Ale", "Red Cap", "Red Falcon Ale", "Rickards Dark",
                "Rickards Original White", "Rickards Red", "Rodenbach Grand Cru", "Schofferhofer Hefeweizen", "Shock Top Belgian White",
                "Shock Top Raspberry Wheat", "Shock Top Variety Pack", "Sleeman Cream Ale", "Sleeman Dark", "Sleeman India Pale Ale", "Smithwicks Ale",
                "Spark House Red Ale", "St. Ambroise India Pale Ale", "St. Ambroise Oatmeal Stout", "St. Ambroise Pale Ale", "Stereovision Kristall Wheat",
                "Stone Hammer Dark Ale", "Sunny & Share Citrus Saison", "Tetleys English Ale", "Thirsty Beaver Amber Ale", "True North Copper Altbier",
                "True North Cream Ale", "True North India Pale Ale", "True North Strong", "True North Wunder Weisse", "Twice As Mad Tom IPA",
                "Unibroue La Fin Du Monde", "Unibroue Maudite", "Unibroue Trois Pistoles", "Upper Canada Dark Ale", "Urthel Hop-It Tripel IPA",
                "Waterloo IPA", "Weihenstephan Kristalweiss", "Wellington Arkell Best Bitr", "Wellington County Dark Ale", "Wellington Special Pale", "Wells IPA"
            ),
            "Address" => array(
                "AC-DC Premium Lager", "Alpine Lager", "Amstel Light", "Amsterdam (416) Local Lager", "Amsterdam Natural Blonde", "Anchor Steam Beer",
                "Barking Squirrel Lager", "Bavaria 8.6", "Bavaria 8.6 Red", "Bavaria Grapefruit Radler", "Bavaria Premium Beer", "Bavik Pils",
                "Baysville Rock Cut Lager", "Becks", "Belle Gueule", "Big Rock Brewmasters Selection", "Big Rock Light Lime", "Big Rock Saaz Republic Pilz",
                "Birra Castello", "Birra Moretti", "Bitburger", "Black Ice", "Black Label", "Blue", "Blue Light", "Bohemian", "Boris Beer",
                "Boris Bold Strong Beer", "Boxer Ice", "Boxer Lager", "Brava", "Brava 5.5", "Brava Light", "Brouczech Premium Lager", "Bud Light",
                "Bud Light Lime", "Bud Light Lime Labatt", "Bud Light Platinum", "Budweiser", "Budweiser Crown", "Budweiser Shot Labatt", "Busch Ice",
                "Busch Lager", "Busch Light", "Camerons Dark266", "Camerons Lager", "Canadian", "Canadian 67", "Canadian 67 Sublime", "Canadian Coldshots",
                "Carib Lager", "Carling Ice", "Carling Lager", "Carling Light", "Carlsberg", "Carlsberg Lite", "Cool Beer Lager", "Coors Banquet", "Coors Light",
                "Corona", "Corona Light", "Cracked Canoe", "Creemore Collection", "Creemore Kellerbier", "Creemore Lager", "Creemore Springs Combo Pack",
                "Creemore Trad Pilsner", "Creemore Urbock", "Crest Super", "Crystal", "Czechvar", "Dab Maibock", "Dab Original Lager", "Dead Frog Mixed Pack",
                "Desperados Tequila Beer", "Dos Equis Amber", "Dos Equis Lager", "Dunkel Weihenstephaner", "Faxe Amber Lager", "Faxe Extra Strong - 10",
                "Faxe Premium Lager - 5", "Faxe Red", "Faxe Strong", "Formosa Springs Draft", "Fosters Import", "Fuerstenberg Prem Pilsener", "Get2gether",
                "Granville Summer Mingler", "Grolsch Lager 450ml", "Grolsch Premium Lager", "Guinness Black Lager", "Hacker-Pschorr Kellerbier", "Harbin Beer",
                "Harp Lager", "Heineken", "Henninger Premium Lager", "Hockley Taster Pack", "Hofbraeu Muenchen Original", "Hogsback Vintage Lager",
                "Hollandia Pilsner", "Holsten Festbock", "Holsten Maibock", "Holsten Premium Bier", "Hopf Weisse", "Hops Bolts India Pale Lager",
                "James Ready 5.5", "James Ready Ice 6.0", "James Ready Lager", "James Ready Light", "Jever Pilsener", "Keiths Brewmaster", "Keiths Light",
                "Keystone Ice", "Keystone Lager", "Keystone Light", "King Brewery Dark Lager", "King Brewery Pilsner", "King Brewery Vienna Lager", "Kokanee",
                "Kozel", "Krombacher Dark", "Krombacher Pils", "Krombacher Weizen", "Kronenbourg 1664", "La Tabachera", "Labatt Extra Dry", "Labatt Genuine Lager",
                "Labatt Ice", "Lakeport Honey Lager", "Lakeport Ice", "Lakeport Light", "Lakeport Pilsener", "Lakeport Red", "Laker Extra Ice", "Laker Honey",
                "Laker Ice", "Laker Lager", "Laker Light", "Laker Red", "Laker Strong", "Lech Beer", "Lowenbrau", "Lucky Lager", "Maximum Ice", "Menabrea Blonda",
                "Michelob Ultra", "Mill St Original Organic", "Millennium Buzz Hemp Beer", "Miller Chill Domestic", "Miller Chill Import",
                "Miller Genuine Draft Clear", "Molson Canadian Wheat", "Molson Dry", "Molson M", "Molson XXX", "Mongozo Premium Pilsner", "Moosehead Lager",
                "Moosehead Light", "Moosehead Light Lime", "Moskato Life", "Moskato Life Rose", "Muskoka Craft Lager", "Muskoka Summer Weiss",
                "Muskoka Survival Pack", "Mythos Beer", "Negra Modelo", "Neustadt Lager", "Octane 7.0", "Okanagan Craft Pack", "Okanagan Springs 1516 Lager",
                "Okocim Pilsner", "Old Milwaukee", "Old Milwaukee", "Old Milwaukee Ice", "Old Milwaukee Light", "Old Style Pilsner", "Old Vienna",
                "PC Black Lager", "PC Cerveza", "PC Down Under Amber", "PC Dry", "PC Genuine Lager", "PC Honey Red", "PC Light", "PC Low Carb", "PC Plznr",
                "Pabst Blue Ribbon", "Pabst Blue Ribbon 5.9", "Pabst Blue Ribbon Light", "Paulaner Hefe-Weissbier", "Pedavena Birra Dolomiti",
                "Peroni Nastro Azzuro", "Pilsner Urquell", "Pistonhead Kustom Lager", "Poppers Party Pack", "Prison Break Pilsner", "Radeberger Pilsner",
                "Red Baron", "Red Baron Light", "Red Baron Lime", "Red Baron Platinum Light", "Red Bull", "Red Stripe", "Rickards Blonde", "Rickards Cardigan",
                "Rickards Fall Taster", "Rickards Lederhosen", "Rickards Oakhouse", "Rickards Shandy", "Rickards Summer Taster Pack", "Rickards Taster Pack",
                "Rickards Winter Taster Pack", "Rolling Rock Pale Lager", "Rosarda Rose", "Saint Andre", "Samuel Adams Boston Lager", "San Miguel Premium Lager",
                "Sapporo", "Schnitzerbrau Gluten Free Lager", "Schofferhofer Grapefruit Radlr", "Seagram Mixer Pack", "Shock Top Lemon Shandy", "Sleeman Clear 2.0",
                "Sleeman Honey Brown Lager", "Sleeman Light", "Sleeman Original Draught", "Sleeman Seasonal Selections", "Sleeman Selections",
                "Sleeman Silver Creek Lager", "Sol", "Spaten", "St Ambroise Premium Taster", "Staropramen", "Steam Whistle", "Steeler", "Stella Artois",
                "Stella Legere", "Stiegl Bier", "Stiegl Grapefruit Radler", "Stone Hammer Pilsner", "Stonewall Light", "Tecate", "Tennents Export Lager",
                "Thurn Taxis Lager", "Thurn Taxis Pilsener", "Thurn Taxis Wolfgang Dunkl", "Tiger Beer", "Trailhead Premium Lager", "True North Blonde Lager",
                "Tuborg Gold", "Tuborg Pilsner", "Tyskie", "Unibroue Blanche Dechambly", "Upper Canada Lager", "Warsteiner Premium Dunkel", "Warsteiner Premium Verum",
                "Waterloo Amber Lager", "Waterloo Dark", "Waterloo Grapefruit Radler", "Waterloo Kolsch Sampler", "Waterloo Pilsner", "Weihenstephan Vitus",
                "Weihenstephaner Hefeweiss", "Wernesgruner Pils", "Winter Mingler", "Wolfgangs German Style Beer", "Xingu Black Beer", "Yanjing Beer", "Zywiec Beer"
            ),
            "City" => array(
                "Belhaven Black Scottish Stout", "Guinness Draught Bottle", "Guinness Extra Stout", "Guinness Pub Draught", "Murphys Irish Stout",
                "Muskoka Chocolate Cranberry", "Sleeman Fine Porter"
            ),
            "Haha" => array(
                "Boxer Watermelon", "Bud Light Lime Lime-a-rita", "Bud Light Lime Mang-o-rita", "Bud Light Lime Straw-ber-rita", "Colt 45",
                "DJ Trotters Flirty Daiquiri", "DJ Trotters Lolita", "Four Loko Black Cherry", "Four Loko Fruit Punch", "Four Loko Grape", "Four Loko Lemonade",
                "Four Loko Peach", "Four Loko Watermelon", "Kensington Watermelon Wheat", "Mad Jack", "Mickeys", "Mojo Fruit Punch", "Mojo Shot Blue Lagoon",
                "Mojo Shot Melon Ball", "Mojo Shot Sourberry", "Mojo Strawberry & Kiwi", "Mons Abbey Blonde", "Mons Abbey Witte", "Olde English 800",
                "Pepito Sangria", "Poppers Cran Ice", "Poppers Hard Ice", "Poppers Orange Smoothie", "Poppers Pink", "Poppers Ricco Sangria", "Poppers Wild Ice",
                "Seagram Iced Lemon Tea", "Seagram Lemon Lime", "Seagram Orange Mango", "Seagram Wildberry", "Seagram Wildberry Extra 6.9", "Twisted Tea", "Wellington Iron Duke"
            )
        )
    )
));
die();
  }

   public function about(){
       $this->viewBuilder()->layout('homes');
        //$users = $this->paginate($this->Users);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
          $this->set('title', 'about-us');
  }

   public function contact(){
      $this->viewBuilder()->layout('homes');
        //$users = $this->paginate($this->Users);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
          $this->set('title', 'contact');
  }
   public function signup(){
    $this->viewBuilder()->layout('homes');
          $this->loadModel("Agencydetail");

           $agencydetail = $this->Agencydetail->newEntity();
       if ($this->request->is(['patch', 'post', 'put'])) {

            $agencydetail = $this->Agencydetail->patchEntity($agencydetail, $this->request->data);
            if ($this->Agencydetail->save($agencydetail)) {
                $this->Flash->success(__('The {0} has been saved.', 'Agencydetail'));
              
              //redirect to page thank

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Agencydetail'));
            }
        }
        $this->set(compact('agencydetail'));
        $this->set('_serialize', ['agencydetail']);
          $this->set('title', 'Sign-up');





  }
   public function terms(){
       $this->viewBuilder()->layout('homes');
        //$users = $this->paginate($this->Users);
        $users = array();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
          $this->set('title', 'terms-conditions');
  }



}
