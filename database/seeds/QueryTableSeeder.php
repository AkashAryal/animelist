<?php

use Illuminate\Database\Seeder;
use App\quotes;
class QueryTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    if(quotes::count() !=0){
      quotes::truncate();
    }

    $wonderfulQuotesArray=array(
      array(
        "anime"=>"Bleach",
        "quote"=>"To know sorrow is not terrifying. What is terrifying is to know you can't go back to happiness you could have.",
        "character"=>"Matsumoto Rangiku"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Hardwork betrays none, but dreams betray many.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Fake people have an image to maintain, real people just don’t care.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Hikkigaya Hachiman",
        "quote"=>"If to be truthful is cruel, then lying must be an act of kindness."
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Hayato Hayama",
        "quote"=>"When you pick the only option you have to choose from, can you really call that your own decision?"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Hikkigaya Hachiman",
        "quote"=>"Everyone has something they hold dear, something they never want to lose. That's why they pretend. That's why they hide the truth. And that's why they lie."
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Hikkigaya Hachiman",
        "quote"=>"If there are things you learn with friends, there must also be things you learn without friends. They must be of equal worth, two sides of the same coin."
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Yukino Yukinoshita",
        "quote"=>"If all you're good for is breathing in and out, then even an AC unit is more useful than you."
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "character"=>"Hikkigaya Hachiman",
        "quote"=>"That’s right. I’m nice. After everything that has happened in my life, I still haven’t gone after anyone or anything in revenge. If I were normal I would have destroyed the world by now. In a sense it makes me a savior of sorts."
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Marriage, the institution where one's existence goes to die.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Isn't changing yourself the same as running away? Why can't you just accept who you are?",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"If the truth is a cruel mistress, then a lie must be a nice girl.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Hey! I'm totally an adult! I bitch and whine, lie through my teeth, and do things that are unfair.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"When a person loses their sense of belonging, they want someone else to hand it back to them on a platter.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"I don't think ignorance is necessarily a bad thing. The more you know, the more problems you have.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"They say that if you change yourself, you'll change the world. but that's a complete lie. They're just forcing you to compromise, by feeding you a convenient little fib.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Relying on someone, helping each other out, and supporting each other. Most would say that's the right thing to do. However, that's just idealistic. In reality, someone always gets the short end of the stick.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Question: The world will not change, but you can change yourself. So then, how will you change?\nAnswer: You become the god of a new world",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"I hate nice girls. Just exchanging greetings with them will get them on your mind. Start texting each other, and your heart will be set a flutter. If they call you, you're done for. Enjoy staring at your logs and grinning like a fool. However, I won't get fooled again. That's what your kind calls kindness. If you're nice to me, you're nice to others. I always end up nearly forgetting that. Reality is cruel, so I'm sure lies are a form of kindness. Thus, I say kindness itself is also a lie. I always ended up with these expectations. And I always ended up with these misunderstandings. And before I knew it, I stopped hoping. A highly trained loner is once bitten, twice shy. As a veteran on this battlefield of life, I've gotten used to losing. That's why I always hate nice girls.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Bears are creatures that feel no insecurity in living alone. They're an animal that lives in isolation. Plus, they can hibernate. What a fabulous thing that is. If I were to be reborn, I definitely want to be a bear.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"People who don't work hard don't have the right to be envious of the people with talent. People fail because they don't understand the hard work necessary to be successful.",
        "character"=>"Yukino Yukinoshita"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"If you think everybody cares about you enough to hate you, then you think far too much of yourself.",
        "character"=>"Yukinoshita Yukino"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"If feelings could be processed like that, they'd have been digitized long ago. The last remaining answer--the one you can't calculate--that's human emotion.",
        "character"=>"Yukinoshita Haruno"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"The bonds between people have to be some kind of drug. Before you know it, you become dependent.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"If wishes could be granted, if desires could be fulfilled, then I wouldn't wish or desire for anything after all. The things you're handed on a silver platter are never genuine and never everlasting. And that is why I'll always keep searching.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"The past makes you wanna die out of regret, and the future makes you depressed out of anxiety, so by elimination, the present is likely the happiest time.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"People usually don't look back to see how far they've come while they're still walking. Of course, when they come to a standstill, the more progress they've made, the more betrayed they feel by their expectations.",
        "character"=>"Hiratsuka Shizuka"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"It doesn't matter if we're wrong, because every time we go wrong, we can continue to look for the right answer.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Hey, stop getting so chummy with me, I might even start treating you as a friend.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"The rich want their private jets and beaches. So it follows that loners, who always have plenty of private time, are the victors in life. Ergo, being alone is the new status symbol.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"It's not like I can't talk to people. I just don't indulge in pointless small talks",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Everyone is a slave to their past. No matter how much you wish to move forward, the events of yester year will bear down on you like the light of the stars as soon as you glance up. Unable to laugh or to banish your past, you carry it ceaselessly in a corner of your heart, waiting for it to resurrect at an inopportune moment.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Rurouni Kenshin",
        "quote"=>"You can die anytime, but living takes true courage.",
        "character"=>"Kenshin Himura"
      ),
      array(
        "anime"=>"Magi",
        "quote"=>"If nobody cares to accept you and wants you in this world, accept yourself and you will see that you don’t need them and their selfish ideas.",
        "character"=>"Alibaba Saluja"
      ),
      array(
        "anime"=>"Trigun",
        "quote"=>"The ticket to the future is always open.",
        "character"=>"Vash The Stampede"
      ),
      array(
        "anime"=>"No Game No Life",
        "quote"=>"Life is not a game of luck. If you wanna win, work hard.",
        "character"=>"Sora"
      ),
      array(
        "anime"=>"Yahari Ore no Seishun Love Comedy wa Machigatteiru",
        "quote"=>"Hardwork betrays none, but dreams betray many.",
        "character"=>"Hikkigaya Hachiman"
      ),
      array(
        "anime"=>"Clannad",
        "quote"=>"If your life can change once, your life can change again.",
        "character"=>"Sanae Furukawa"
      ),
      array(
        "anime"=>"Pokemon",
        "quote"=>"It’s more important to master the cards you’re holding than to complain about the ones your opponent was dealt.",
        "character"=>"Grimsley"
      ),
      array(
        "anime"=>"Fate Zero",
        "quote"=>"Whatever you do, enjoy it to the fullest. That is the secret of life.",
        "character"=>"Rider"
      ),
      array(
        "anime"=>"Gakusen Toshi Asterisk",
        "quote"=>"I too will obtain everything that I desire. Not because someone asked me to do it, but because I know in my heart that I have something worth fighting for.",
        "character"=>"Julis Alexia Van Riessfeld"
      ),
      array(
        "anime"=>"Dragon Ball Z",
        "quote"=>"Power comes in response to a need, not a desire. You have to create that need.",
        "character"=>"Goku"
      ),
      array(
        "anime"=>"Fate Stay Night",
        "quote"=>"There are no regrets. If one can be proud of one’s life, one should not wish for another chance.",
        "character"=>"Saber"
      ),
      array(
        "anime"=>"Clannad",
        "quote"=>"If your life can change once, your life can change again.",
        "character"=>"Sanae Furukawa"
      ),
      array(
        "anime"=>"Tamako Market",
        "quote"=>"You can’t always hold on to the things that are important. By letting them go we gain something else.",
        "character"=>"Kunio Yaobi"
      ),
      array(
        "anime"=>"Naruto",
        "quote"=>"If you don’t like your destiny, don’t accept it. Instead, have the courage to change it the way you want it to be.",
        "character"=>"Naruto Uzumaki"
      ),
      array(
        "anime"=>"Denpa Kyoushi",
        "quote"=>"You can’t win a game by doing nothing. And if someone else wins it for you then you haven’t accomplished anything. Life is the same way.",
        "character"=>"Junichirou Kagami"
      ),
      array(
        "anime"=>"Soul Eater",
        "quote"=>"I refuse to let my fear control me anymore.",
        "character"=>"Maka Albarn"
      ),
      array(
        "anime"=>"Fate Stay Night",
        "quote"=>"Do not think about other things, there is only one thing you can do. So master that one thing. Do not forget. What you must imagine is always that you, yourself, are the strongest. You do not need outside enemies. For you, the one you have to fight is none other than your own image.",
        "character"=>"Archer"
      ),
      array(
        "anime"=>"Akame Ga Kill",
        "quote"=>"If you can’t find a reason to fight, then you shouldn’t be fighting.",
        "character"=>"Akame"
      ),
      array(
        "anime"=>"Attack on Titan",
        "quote"=>"People who can’t throw something important away, can never hope to change anything.",
        "character"=>"Armin Arlelt"
      ),
      array(
        "anime"=>"Bleach",
        "quote"=>"We can’t waste time worrying about the what if’s.",
        "character"=>"Ichigo Kurosaki"
      ),
      array(
        "anime"=>"Higurashi",
        "quote"=>"Life is like a tube of toothpaste. When you’ve used all the toothpaste down to the last squeeze, that’s when you’ve really lived. Live with all your might, and struggle as long as you have life.",
        "character"=>"Mion Sonozaki"
      ),
      array(
        "anime"=>"Clannad",
        "quote"=>"If your life can change once, your life can change again.",
        "character"=>"Sanae Furukawa"
      ),
      array(
        "anime"=>"One Piece",
        "quote"=>"If your life can change once, your life can change again.",
        "character"=>"Nico Robin"
      ),
      array(
        "anime"=>"Barakamon",
        "quote"=>"That’s why I can’t make a change. Everything I do is so… Half-assed.",
        "character"=>"Hiroshi Kido"
      ),
      array(
        "anime"=>"Best Student Council",
        "quote"=>"Sometimes it’s necessary to do unnecessary things.",
        "character"=>"Kanade Jinguuji"
      ),
      array(
        "anime"=>"Fate Zero",
        "quote"=>"Do exactly as you like. That is the true meaning of pleasure. Pleasure leads to joy and joy leads to happiness.",
        "character"=>"Gilgamesh"
      ),
      array(
        "anime"=>"Log Horizon",
        "quote"=>"If you can’t do something, then don’t. Focus on what you can do.",
        "character"=>"Shiroe"
      ),
      array(
        "anime"=>"D.Gray Man",
        "quote"=>"When you lose sight of your path, listen for the destination in your heart.",
        "character"=>"Allen Walker"
      ),
      array(
        "anime"=>"Fairy Tail",
        "quote"=>"The moment you think of giving up, think of the reason why you held on so long.",
        "character"=>"Natsu Dragneel"
      ),
      array(
        "anime"=>"D.Gray Man",
        "quote"=>"The only home that a man should ever need is within his heart.”",
        "character"=>"Lavi Bookman"
      ),
      array(
        "anime"=>"The Ambition Of Oda Nobuna",
        "quote"=>"A dream is worth less than nothing if you don’t have someone else to share it.",
        "character"=>"Dousan Saitou"
      ),
      array(
        "anime"=>"Kokoro Connect",
        "quote"=>"What you can’t accomplish alone, becomes doable when you’re with someone else.",
        "character"=>"Taichi Yaegashi"
      ),
      array(
        "anime"=>"Death Note",
        "quote"=>"I'll take a potato chip... and eat it!",
        "character"=>"Light Yagami"
      ),
      array(
        "anime"=>"Little Busters",
        "quote"=>"If you turn your eyes away from sad things, they’ll happen again one day. If you keep running away, you’ll keep repeating the same mistakes. That’s why you have to face the truth straight on.",
        "character"=>"Riki Naoe"
      ),
      array(
        "anime"=>"Future Diary",
        "quote"=>"Even if you’re weak, there are miracles you can seize with your hands if you fight on to the very end.",
        "character"=>"Uryuu Minene"
      ),
      array(
        "anime"=>"Amagi Brilliant Park",
        "quote"=>"If you wanna make people dream, you’ve gotta start by believing in that dream yourself!",
        "character"=>"Seiya Kanie"
      ),
      array(
        "anime"=>"Angel Beats",
        "quote"=>"If you can’t do something, then don’t. Focus on what you can do.Even if we forget the faces of our friends, We will never forget the bonds that were carved into our souls.",
        "character"=>"Otonashi Yuzuru"
      ),
      array(
        "anime"=>"Slayers",
        "quote"=>"Even If you’ve only got a 1% chance of winning, but you convince yourself you’re gonna lose, that 1% becomes 0%.",
        "character"=>"Lina Inverse"
      ),
      array(
        "anime"=>"Sword Art Online",
        "quote"=>"It’s impossible to work hard for something you don’t enjoy.",
        "character"=>"Silica"
      ),
      array(
        "anime"=>"One Punch",
        "quote"=>"Human beings are strong because we can change ourselves.",
        "character"=>"Saitama"
      ),
      array(
        "anime"=>"Assassination Classroom",
        "quote"=>"People with talent often have the wrong impression that things will go as they think.",
        "character"=>"Karma Akabane"
      ),
      array(
        "anime"=>"Spice And Wolf",
        "quote"=>"Remember the lesson, not the disappointment.",
        "character"=>"Holo The Wise Wolf"
      ),
      array(
        "anime"=>"Bleach",
        "quote"=>"To know sorrow is not terrifying. What is terrifying is to know you can't go back to happiness you could have.",
        "character"=>"Matsumoto Rangiku"
      ),
      array(
        "anime"=>"One Piece",
        "quote"=>"Those who stand at the top determine what's wrong and what's right! This very place is neutral ground! Justice will prevail, you say? But of course it will! Whoever wins this war becomes justice!",
        "character"=>"Don Quixote Doflamingo"
      ),
      array(
        "anime"=>"Fairy Tail",
        "quote"=>"Fear is not evil. It tells you what weakness is. And once you know your weakness, you can become stronger as well as kinder.",
        "character"=>"Gildarts Clive"
      ),
      array(
        "anime"=>"Rurouni Kenshin: Meiji Kenkaku Romantan",
        "quote"=>"Whatever you lose, you'll find it again. But what you throw away you'll never get back.",
        "character"=>"Kenshin Himura"
      ),
      array(
        "anime"=>"Kill la Kill",
        "quote"=>"Fear is freedom! Subjugation is liberation! Contradiction is truth! Those are the facts of this world! And you will all surrender to them, you pigs in human clothing!",
        "character"=>"Satsuki Kiryuuin"
      ),
      array(
        "anime"=>"Spice And Wolf",
        "quote"=>"I am the hope of the universe. I am the answer to all living things that cry out for peace. I am protector of the innocent. I am the light in the darkness. I am truth. Ally to good! Nightmare to you!",
        "character"=>"Holo The Wise Wolf"
      ),
      array(
        "anime"=>"Dragon Ball Z",
        "quote"=>"Remember the lesson, not the disappointment.",
        "character"=>"Son Goku"
      ),
      array(
        "anime"=>"Naruto Shippuden",
        "quote"=>"Religion, ideology, resources, land, spite, love or just because… No matter how pathetic the reason, it’s enough to start war. War will never cease to exist… reasons can be thought up after the fact… Human nature pursues strife.",
        "character"=>"Pain"
      ),
      array(
        "anime"=>"Kuroko No Basket",
        "quote"=>"Don’t give up, there’s no shame in falling down! True shame is to not stand up again!",
        "character"=>"Shintaro Midorima"
      )
    );

    foreach ($wonderfulQuotesArray as $q) {
      $quotes = new quotes;
      $quotes->quote=$q['quote'];
      $quotes->character=$q['character'];
      $quotes->anime=$q['anime'];
      $quotes->save();
    }

  }
}
