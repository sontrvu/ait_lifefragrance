let coffeeProds = [
  {
    id: "prod1",
    name: "Lorem",
    price: 99, // Price per 100g
    image: "assets/images/items/prod1.jpg",
    description1: "Lorem ipsum",
    description2: "The Swiss Water method of caffeine removal involves bathing the green beans in water that is highly saturated with the main flavour compounds of coffee. This situation sets up an osmosis reaction where only the caffeine content is removed the green beans, leaving all of the flavour compounds still in the green beans! ",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0, // Preferred size index
    prefGrind: 0 // Preferred grind index
  },
  {
    id: "prod2",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod5.jpg",
    description1: "I stumbled upon Open Plan Coffee Roasters in North Perth almost by accident, since then they’ve become a firm favourite for my morning coffee. ",
    description2: "Tim from Open Plan blends and roasts the beans himself and you can really tell the difference from high quality freshly roasted beans. It’s a great coffee and we’re excited to bring you another product from a local producer that we believe in.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod3",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod8.jpg",
    description1: "Fresh brewed Vietnamese coffee topped with icy hills of sweet and frothy coconut slush.",
    description2: "Is your mouth watering because mine is? Ice-blended Vietnamese coconut coffee is much more than just a caffeine rush, it’s a nice pick me up best eaten for any time of the day.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod4",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod4.jpg",
    description1: "We’re turning the tides on terrible decaf coffee from lazy cafes and anti-decaf coffee marketing.",
    description2: "From the mountains of Mexico comes this 'Mountain Water Washed' Decaf Coffee. Not only is it decaffeinated but it is also 100% certified Organic and Rainforest Alliance coffee.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod5",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod2.jpg",
    description1: "ESPRESSO MOCHA: Coffee beans sourced from the high regions in southern Africa. This blend contains toffee and almond notes with subtle hints of melon and blackberry",
    description2: "It has a rich syrup body with a bitter-sweet cocoa finish. It is a very satisfying cup for coffee lovers that seek a medium-strong mocha flavour.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod6",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod6.jpg",
    description1: "The aroma is of intense dried fruit, and the flavours have a nutty almond character and pronounced earthiness. The long, smooth aftertaste is of dried fruit and a disctinct earthy note.",
    description2: "As an espresso, the result is a muted sweetness and heavy body. When combined with milk the earthy pungency of the Robusta coffee rises above the sweetness of the milk to produce a memorable, strong coffee experience.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod7",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod7.jpg",
    description1: "d’TIME Espresso Energy Bar ™ contains quality almonds, pumpkin seeds, melon seeds, sultana and dark chocolate – the best compliment to the nuts.",
    description2: "d’TIME Espresso Energy Bar ™ is Halal and MeSTI Certified.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  },
  {
    id: "prod8",
    name: "Lorem",
    price: 99,
    image: "assets/images/items/prod3.jpg",
    description1: "A great coffee composed of a harmonious blending of coffees of the Arabica and Robusta species, accurately measured in order to offer you a great Italian Espresso with medium roast.",
    description2: "Italcaffè coffee beans are perfect for perfect for espresso and bean to cup coffee machines. Italcaffè whole espresso bean is packaged in a protective atmosphere to conserve taste and freshness. This is a bag of 1kg with one-way degassing valve. These features guarantee to Italcaffè Gran Gusto a better preservation over time as well as greater quality of the whole bean coffee compared to the usual bags that you find on the market.",
    sizeOptions: ["10"],
    grindOptions: ["Lorem ipsum"],
    prefSize: 0,
    prefGrind: 0
  }
];

let blogArticles = [
  {
    id: "art0",
    isFeatured: true,
    title: "Lorem ipsum dolor sit amet",
    thumbnail: "assets/images/blog/espresso affogato.jpg",
    sumary: `
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua 
    `,
    htmlContent: `
    <p>Affogato by no surprise comes from Italy. It sounds Italian, right? What does it mean one may wonder. Drumroll
    please…. It means drowned or poached, just like your brunch favorite poached eggs in Italian is ‘”le uova
    affogate” so the famous espresso affogato is simply like ice cream poached/drowned in warm coffee. Or warm coffee
    with nutty liqueur!</p>
    <img src="assets/images/blog/espresso affogato.jpg">
    <h5>History and what it is?</h5>
    <p>So a bit about the origins of affogato… Oh Italy, the mother of so many tasty things and foods that we consume
      daily. Renaissance and Florence, the birthplace of gelato or ice cream and Turin – the cradle of espresso around
      1884. Those facts we know, but what we don’t know is how affogato came to be and when. A bit sad, but not too
      discouraging as it can be seen on many specialty menu’s around the world and one can easily make it at home.
      Trying affogato in each and every coffee shop wouldn’t be a terrible idea, don’t you think?</p>
    <p>The original recipes calls for two Italian classics: a shot of freshly brewed espresso and a scoop of vanilla or
      fior di latte gelato. Due to its popularity, there’s now lots of variations that diverge from the original recipe.
      Think of different gelato flavors, homemade ice cream infused with spices, fortified wines, or the addition of
      nuts, chocolate, cocoa nibs and crumbled cookies or biscotti.</p>
    <h5>ESSENTIAL TIPS:</h5>
    <p>First – freeze the gelato/ice cream scoops beforehand, in order to slow down the melting of the ice cream. Also –
      chill the serving glass/cup.
      If you're making several portions at once, it is best to serve the gelato and the espresso separate and leave the
      "drowning" to the guests.</p>
    <h5>HOW TO EAT IT?</h5>
    <p>With a spoon! Ice cream first, then coffee or coffee along with melted ice cream – it’s divine! I know some
      people
      who sip affogato rather than eat with a spoon, but its personal preference. I really believe it can be drinkable
      perfection.</p>
    
    <p>Best enjoyed after a big hearty meal or pick-me-up in the afternoon.</p>
    <img src="assets/images/blog/affogatto.jpeg">
    `,
  },
  {
    id: "art1",
    title: "Lorem ipsum dolor sit amet",
    thumbnail: "assets/images/blog/cream infusion ice cream.jpg",
    sumary: `Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua`,
    htmlContent: `    
    <h5>Cold Brew Ice Cream</h5>
    <p>This is a fun recipe where you infuse coffee directly into cream! Very coffee-like in flavor, not too sweet but
      not very creamy either. This was my favorite out of these three recipes – thanks for sharing it, Coild Brew Queen!
    </p>
    <img src="assets/images/blog/cream infusion ice cream.jpg">
    <h5>INGREDIENTS:</h5>
    <ul>
      <li>120 ml milk</li>
      <li>120 ml heavy cream or whipping cream</li>
      <li>60 ml sugar</li>
      <li>1 egg</li>
      <li>80 ml roasted coffee beans</li>
      <li>vanilla in the form of extract (0,5 tea spoon) or directly from a bean</li>
    </ul>
    <img src="assets/images/blog/makingofinfused1.jpeg">
    <ol>
      <li>Crush or grind the beans. Put the crush/grinds and cream into a jar. Cover with a lid and keep in fridge for
        20-24 hours. Give the infusion a nice stir a few times during steeping process.</li>
      <li>Put a saucepan on a medium heat. Simmer the milk, don’t boil it. In case you use vanilla pod, steep it in the
        milk here.</li>
      <li>Strain the cream through a mesh or similar and put it in the fridge. Note that the amount of liquid cream is a
        lot smaller than in the beginning of process.</li>
      <li>Whisk eggs and sugar in a heat proof bowl. Then add the hot milk into the mixture whisking constantly. Add
        first just a small amount of milk pouring slowly to avoid making scrambled eggs 😊 After that you can add the
        rest of the milk and be a bit faster.</li>
      <li>Once the milk, eggs and sugar are mixed, pour the mixture on the saucepan. Cook it on medium heat stirring
        constantly for about 5-10 minutes until the mixture thickens a bit. In case you use vanilla extract, add it at
        this point.</li>
      <li>Cool down the milk for 10 minutes and then stir in the coffee cream. Put the mixture in the fridge for at
        least 5 hours, preferably overnight.</li>
    </ol>
    <p>Don’t you think cold brew coffee is extremely versatile ingredient! Are you considering to include it into your
      café menu? Check Jori’s blog post about why you really should do so!
    </p>
    <p>And hey, do you have a great recipe for coffee ice cream lollies? Share it with us and we will for sure give it a
      taste!
    </p>`,
  },
  {
    id: "art2",
    title: "Steaming Milk - Theory Behind the Microfoam",
    thumbnail: "assets/images/blog/coffee and milk.jpg",
    sumary: `Using the steam wand of an espresso machine is the most common way of steaming milk. But what really happens when introducing heat, air and tiny water droplets into the milk?`,
    htmlContent: `    
    <h5>How coffee and milk interact in a cup? Any differences between coffees and milks? </h5>
    <p>The main reaction from the barista point of view is between the acids of the coffee and the proteins of the milk.
    </p>
    <p>Also, fat can block some flavors and also enhance some. Milk and coffee generate also new flavors when combined.
      Especially pleasant flavor characteristics such as creamy and caramel notes can be detected when you use milk with
      more than 1,5 % fat. Fat in milk also helps to reduce astringency.
    </p>
    <p>Note that when choosing plant based drinks you should evaluate which of them are best for your coffee of choice.
      One coffee can be great combined with dairy but turn into misery when combined into some vegan milk.
    </p>
    <img src="assets/images/blog/art1.png">
    <h5>Which kind of milks work best for steaming?
    </h5>
    <p>The more fat, the easier it is to create microfoam that is shiny and silky. On the other hand too much fat is not
      appreciated with all the customers and the fat content also relates to the flavor and mouthfeel. Prefer milk with
      at least 1,5% of fat to get the positive influences of milk fat for both texture and flavor. With reasonable fat
      content you will gain nice and shiny microfoam and it is easier for you to pour latte art.
    </p>
    <p>Fat free milk gives you big and rigid foam, much like shaving foam actually! Not usable for latte art and
      definitely not nice mouthfeel.
    </p>
    <p>Once again: proteins. It is not about having them a lot but having correct proteins and having them in balance.
      With the correct balance the foam stays stable longer meaning not separating into liquid and airy bubbles.
    </p>
    <p>Proteins react differently to heating. Casein is pretty heat tolerant. Whey on the other hand is not but it foams
      well and is more water soluble. Whey also coagulates a bit already during steaming but when keeping the
      temperature below 65 c, coagulated whey maintains the foam structure. If going higher than 65 c, whey structure
      changes and all the foam disappears. Note that proteins are very different in cow milk and non-dairy milk
      products!
    </p>
    <img src="assets/images/blog/coffee and milk.jpg">
    <p>Milk might make your coffee taste a whole different!
    </p>`,
  },
  {
    id: "art3",
    title: "Aeropress Go - What Is It and How to Brew With It?",
    thumbnail: "assets/images/blog/aeropress go shape difference.jpg",
    sumary: `Aeropress has been a barista favourite since it made to the coffee scene 15 years ago and now they have launched a new version of it; Aeropress Go. Aeropress Go is small, light, durable, easy to wash, versatile and fast in use. What’s not to love in Aeropress Go! See what's the Aeropress Go all about and how you can use it.`,
    htmlContent: `
    <h5>There are two things in Go one might consider as downsides. But are they really?</h5>
    <p>First, the size. Being 100 g lighter than the original, the Go is also 20% smaller in volume. Especially those
      who like to make inverted brews, this is not good news as you need all the space available for the water. Then
      again, you can easily tackle this by bypassing. Just make your brew stronger and then dilute it by adding hot
      water. Or if you are not a great fan of bypassing, you might want to try this double brewing technique.
    </p>
    <p>About the inverted style: for sure it gives a cool touch when you flip the Aeropress and the crowd applauses. But
      inverting might also have an effect on your extraction as no water goes through the filter during the extraction
      time.
    </p>
    <p>Another thing is the cylinder flange shape. The Go will not fit on wide cups as easily as the original. If you
      only use the mug included or another vessel that is compatible to the cylinder, this is not a problem either.
    </p>
    <p>Do you always brew directly into the serving vessel? Try a pitcher instead. Then the coffee will not be as hot
      and it is also naturally stirred before serving when pouring. And if you are bypassing, this is your trick.
    </p>
    <img src="assets/images/blog/aeropress go shape difference.jpg">
    <p> All in all Aeropress Go seems to be a nice update of the original. Value for the money, nice looking and at the
      end of the day has no real cons compared to the original.
    </p>
    <img src="assets/images/blog/aeropress go size difference.jpg">
    <h5>Pro tips for Aeropressers
    </h5>
    <ul>
      <li>When brewing in nature or for example in an aeroplane (ha ha ha), you need to have a hot water source. It
        might be a pot on a fire place, an electric kettle or just a thermos filled at home. No need for goose neck
        kettle - you can use the plunger to pour water and it also serves as a measure, if you don’t have a scale!
      </li>
      <li>Did you know that many great Aeropress brews have been made with water relatively low in temperature (80c or
        so)? Talking about lower water temperature, this device is also handy when preparing cold brew. Simply prepare a
        small strong batch of coffee with fine grind level and stirring long, then bypassing the coffee with cold water
        up to the serving volume. Aeropress also serves as a filter when cold brewing. Simply pour the cold brew into
        your AP and filter it before serving!
      </li>
      <li>Before brewing, wet the plunger rubber seal to make it more slippery. Remember also to wash this little fellow
        frequently!
      </li>
      <li>Aeropress does not have enough pressure to prepare espresso. But as baristas as experimental animals, it is
        fun to try! Prepare a small strong batch of coffee with fine grind level and stirring long. This is basically
        the closest you can get to espresso with this device. And it is possible to do this experiment using cold water,
        too!
      </li>
      <li>Try using two paper filters instead of one! It gives you cleaner and smoother cup. There is also a metal
        filter available, if you are curious to check the brewing results between these two.
      </li>
    </ul>
    <img src="assets/images/blog/aeropress go instead of gooseneck kettle.jpg">`,
  },
  {
    id: "art4",
    title: "How is Russian Coffee Culture Like?",
    thumbnail: "assets/images/blog/IMG_4814.png",
    sumary: `Russian coffee culture has developed rapidly during the past decade: numbers of third wave coffee shops and specialty coffee roasters appeared all over the country. Still Russian coffee culture is underdeveloped and it has a lot of potential to grow. Let's see how is Russian coffee culture like!`,
    htmlContent: `
    <p>I remember from my childhood that magic aroma from the kitchen when my aunt was brewing cezve coffee and it
    always attracted me. Grinding fresh beans on a beautiful hand grinder made it like a special ritual. Everyone
    gathered around for a cup of coffee and a chat as the kitchen is the favourite place of every Russian family to
    spend time. Maybe those memories can explain my passion for this drink. Nowadays it's becoming more and more
    common that coffee is the drink when people gather for those long conversations.
    </p>
    <p>Although coffee consumption is still lower than in some European countries for many reasons but in fact, coffee
      is not a new entrant in Russia, tradition of its drinking was carefully developed by Peter the Great I, but only
      rich could afford it. In the 19th century coffee culture in Russia fell into a decay due to social and political
      crisis. During the Soviet Union period, coffee was in shortage and it was really hard to get your hands on it. It
      was common that people turned into substitutes such as chicory roots and barley. Coffee was usually brewed in
      cezve or how we call it in Russia “turka”.
    </p>
    <img src="assets/images/blog/IMG_4814.png">
    <p>Strong “turka” traditions still dominate among consumers. The simplicity of the device and its “magic” makes
      cezve the king of Russian home brewing methods. It also affects specialty coffee industry: Sergey Blinnikov, head
      barista of popular chain of coffee shops Cezve Coffee the World Cezve/Ibric Champion in 2019! The idea of his
      signature drink was to reconstruct the coffee cherry in the drink, using cascara, silverskin and dried coffee
      flowers.
    </p>
    <p>Cezve gives a lot of opportunities to bring unique flavors to coffee and besides is a great way to combine
      different coffee tastes with spices, flowers or juices. Developing coffee traditions of a particular country is a
      great way to express the identity and bring passion to the local coffee scene.
    </p>
    <img src="assets/images/blog/IMG_0922.jpg">
    <h5>Do Russians still prefer tea?
    </h5>
    <p>Russians are often associated as a tea drinking people and there are many reasons for this: 78% of the people say
      they drink at least one cup of a tea daily and I'm not an exception. We prefer to pair tea with some sweets or
      pastry and normally have a few “tea breaks” during daytime. However, coffee-based beverages are a huge trend and
      for the past few years coffee started to dominate among consumers, especially in big cities.
    </p>
    <p>Coffee consumption in Russia is still lower than in some European countries: 0,4 kg per capita, compared to
      Finland: 10,2 kg per capita in 2020, according to Euromonitor.
    </p>`,
  }
];