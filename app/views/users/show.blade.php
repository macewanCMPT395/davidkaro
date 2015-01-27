@extends('layouts.profile')

@section('menu')
        
        <li>
            {{ link_to("/users/{$user->UserName}/edit", "Edit Profile") }}
        </li>
        
        <li>
            {{ link_to("/", "Sign Out") }}
        </li>
@stop


@section('content')

<?php
$users = DB::table('users')->get();
$users = User::all();
?>

<div class="profile-list">
    @foreach ($users as $u)
    <div class="profile">
        <ul>
            <li>
                <svg width="160" height="160">
                    <rect class="pic" x="5" y="5" width="150" height="150" />
                </svg> 
            </li>
            <li>
                <div class="user-name">{{$u->UserName}}</div>
                <div class="user-info">
                    <ul>
                        <li>
                            Gender: {{$u->Gender}} <br>
                            Looking For: {{$u->SexualOrientation}} <br>
                            
                        </li>
                        <li>
                            Fur Color: {{$u->FurColor}} <br>
                            Commitment Level: {{$u->Interests}} <br>
                        </li>
                        <li>
                            Interests: {{$u->Interests}} <br>
                            Email: {{$u->Email}} <br>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    @endforeach
</div>
        
        <p>
            Wikipedia could change the way the internet remembers GamerGate thanks to a court ruling banning several feminist site editors.
To resolve an editing tug-of-war over the “GamerGate” webpage, the Wikipedia’s high court sanctioned five feminist editors and banned them from contributing to GamerGate or other gender issue themed articles as part of a preliminary decision released Friday.
The online encyclopedia is democratically run, known for letting anyone edit unlocked pages and a small group of editors operating the site behind the scenes. ArbCom, the site’s highest governing authority used to settle editing and site disputes, determined that five feminist editors violated the site’s policy by making corrections to the GamerGate article to include the controversial movement’s well-known anti-woman themes, the Guardian reported.
By wanting to document harassment against women in GamerGate articles, Wikipedia is banning the editors from contributing to articles related to GamerGate or broad articles about “gender or sexuality.” Editors on the other side of the debate, those who believe the movement centers on “ethics in gaming journalism,” were also sanctioned but can still contribute to articles with little restrictions.
“No sanctions at all were proposed against any of GamerGate’s warriors, save for a few disposable accounts created specifically for the purpose of being sanctioned,” Mark Bernstein, a writer and Wikipedia editor, wrote on his blog. “By my informal count, every feminist active in the area is to be sanctioned.”
Bernstein continues, saying the committee’s decision would allow GamerGaters to rewrite not only the main page, but also make changes to some of the most prominent victims of the controversy. That includes media critic and feminist Anita Sarkeesian, who was driven from her home after receiving death and rape threats for her video criticizing female tropes in video games.
GamerGate is made up of small subset of gamers that have harassed female media critics, developers and bloggers with violent and graphic death and rape threats. Supporters often characterize it as a movement for improving ethics in gaming journalism after game developer Zoe Quinn’s former boyfriend publicly accused her of cheating on him with a gaming writer. Quinn was also driven from her home because of persistent violent threats.
The movement garnered media attention in 2014 after supporters forced gaming site Gamasutra’s advertisers, such as Intel, to pull its ads. Actress and gaming enthusiast Felicia Day blogged about how she was “terrified” after receiving a deluge of hateful tweets and messages because she sent a reply message to one to the main GamerGate victims.
Much like the tech industry overall, gaming culture has been often condemned for largely excluding women and minorities. The gaming industry tends to be heavily male-dominated, which translates into the game products: Female game characters are scarce and are frequently overly sexualized with disproportionate body dimensions or subject to domestic violence or sexual assault even when they are put in lead roles.
Despite women making up a large chunk of gamers, some game developers are reluctant to make more diverse characters. Ubisoft, the game developer, caught flack from the gaming community after decided not to add a female character to its Assassin’s Creed Unity game because it was too much work.
Moreover, the lax online harassment policies that have permeated tech and gaming often exacerbate that sentiment. To combat that, Quinn and fellow game developer Alex Lifschitz launched anti-harassment site Crash Override. The site offers free support to harassment victims including threat monitoring, legal help, and counseling. The task force will also help law enforcement involved in harassment cases and lend information security services to protect victims against doxxing, the releasing of a person’s personal location, or swatting, when a SWAT team is sent to a victim’s home based on a false reports of criminal activity.
            
The charge that feminism stereotypes men as predators while reducing women to helpless victims certainly doesn’t apply to all feminists — but it’s a reasonably fair description of a large, influential, highly visible segment of modern feminism

RECOMMENDED FOR YOU
 Forgotten Alfred Hitchcock Holocaust Documentary Gets New Life
Forgotten Alfred Hitchcock Holocaust Documentary Gets New Life
 See How One Artist Dramatically Changes Bratz Dolls to Look Like Real Girls
See How One Artist Dramatically Changes Bratz Dolls to Look Like…
 One State of the Union, Two Barack Obamas
One State of the Union, Two Barack Obamas
The latest skirmish on the gender battlefield is “Women Against Feminism”: women and girls taking to social media to declare that they don’t need or want feminism, usually via photos of themselves with handwritten placards. The feminist reaction has ranged from mockery to dismay to somewhat patronizing (or should that be “matronizing”?) lectures on why these dissidents are wrong. But, while the anti-feminist rebellion has its eye-rolling moments, it raises valid questions about the state of Western feminism in the 21st century — questions that must be addressed if we are to continue making progress toward real gender equality.

MORE
How 7 Disney Princesses Could Change the World
Meet the First Ever Female Editor of the Economist
'Going to Pack a Punch': Historic Blizzard Unleashes on Northeast NBC News
Storm Travel Survival Guide: Planes, Train and Automobiles NBC News
Watch Out Polar Vortex: Bombogenesis Is Here NBC News
Female anti-feminism is nothing new. In the 19th century, plenty of women were hostile to the women’s movement and to women who pursued nontraditional paths. In the 1970s, Marabel Morgan’s regressive manifesto The Total Woman was a top best seller, and Phyllis Schlafly led opposition to the Equal Rights Amendment. But such anti-feminism was invariably about defending women’s traditional roles. Some of today’s “women against feminism” fit that mold: they feel that feminism demeans stay-at-home mothers, or that being a “true woman” means loving to cook and clean for your man. Many others, however, say they repudiate feminism even though — indeed, because — they support equality and female empowerment:

POPULAR AMONG SUBSCRIBERS

Interstellar, Where No Movie Has Gone Before
Subscribe
The Last Men of Steel
Review: Interstellar’s Wonder of Worlds Beyond
“I don’t need feminism because I believe in equality, not entitlements and supremacy.”

“I don’t need feminism because it reinforces the men as agents/women as victims dichotomy.”

“I do not need modern feminism because it has become confused with misandry which is as bad as misogyny, and whatever I want to do or be in life, I will become through my own hard work.”

Or, more than once: “I don’t need feminism because egalitarianism is better!”

Again and again, the dissenters say that feminism belittles and demonizes men, treating them as presumptive rapists while encouraging women to see themselves as victims. “I am not a victim” and “I can take responsibility for my actions” are recurring themes. Many also challenge the notion that American women in the 21st century are “oppressed,” defiantly asserting that “the patriarchy doesn’t exist” and “there is no rape culture.”

One common response from feminists is to say that Women Against Feminism “don’t understand what feminism is” and to invoke its dictionary definition: “the theory of the political, economic and social equality of the sexes.” The new anti-feminists have a rejoinder for that, too: they’re judging modern feminism by its actions, not by the book. And here, they have a point.

Consider the #YesAllWomen Twitter hashtag, dubbed by one blogger “the Arab Spring of 21st century feminism.” Created in response to Elliot Rodger’s deadly shooting spree in Isla Vista, Calif. — and to reminders that “not all men” are violent misogynists — the tag was a relentless catalog of female victimization by male terrorism and abuse. Some of its most popular tweets seemed to literally dehumanize men, comparing them to sharks or M&M candies of which 10% are poisoned.

Consider assertions that men as a group must be taught “not to rape,” or that to accord the presumption of innocence to a man accused of sexual violence against a woman or girl is to be complicit in “rape culture.” Consider that last year, when an Ohio University student made a rape complaint after getting caught on video engaging in a drunken public sex act, she was championed by campus activists and at least one prominent feminist blogger — but a grand jury declined to hand down charges after reviewing the video of the incident and evidence that both students were inebriated.

Consider that a prominent British feminist writer, Laurie Penny, decries the notion that feminists should avoid such generalizations as “men oppress women”; in her view, all men are steeped in a woman-hating culture and “even the sweetest, gentlest man” benefits from women’s oppression. Consider, too, that an extended quote from Penny’s column was reposted by a mainstream reproductive-rights group and shared by nearly 84,000 Tumblr users in six months.

Sure, some Women Against Feminism claims are caricatures based on fringe views — for instance, that feminism mandates hairy armpits, or that feminists regard all heterosexual intercourse as rape. On the other hand, the charge that feminism stereotypes men as predators while reducing women to helpless victims certainly doesn’t apply to all feminists — but it’s a reasonably fair description of a large, influential, highly visible segment of modern feminism.

Are Women Against Feminism ignorant and naive to insist they are not oppressed? Perhaps some are too giddy with youthful optimism. But they make a strong argument that a “patriarchy” that lets women vote, work, attend college, get divorced, run for political office and own businesses on the same terms as men isn’t quite living up to its label. They also raise valid questions about politicizing personal violence along gender lines; research shows that surprisingly high numbers of men may have been raped, sometimes by women.

For the most part, Women Against Feminism are quite willing to acknowledge and credit feminism’s past battles for women’s rights in the West, as well as the severe oppression women still suffer in many parts of the world. But they also say that modern Western feminism has become a divisive and sometimes hateful force, a movement that dramatically exaggerates female woes while ignoring men’s problems, stifles dissenting views, and dwells obsessively on men’s misbehavior and women’s personal wrongs. These are trends about which feminists have voiced alarm in the past — including the movement’s founding mother Betty Friedan, who tried in the 1970s to steer feminism from the path of what she called “sex/class warfare.” Friedan would have been aghast had she known that, 50 years after she began her battle, feminist energies were being spent on bashing men who commit the heinous crime of taking too much space on the subway.

Is there still a place in modern-day America for a gender-equality movement? I think so. Work-family balance remains a real and complicated challenge. And there are gender-based cultural biases and pressures that still exist — though, in 21st century Western countries, they almost certainly affect men as much as women. A true equality movement would be concerned with the needs and interests of both sexes. It would, for instance, advocate for all victims of domestic and sexual violence regardless of gender — and for fairness to those accused of these offenses. It would support both women and men as workers and as parents.

Should such a movement take back feminism — or, as the new egalitarians suggest, give up on the label altogether because of its inherent connotations of advocating for women only? I’m not sure what the answer is. But Women Against Feminism are asking the right questions. And they deserve to be heard, not harangued. As one of the group’s graphics says, “I have my own mind. Please stop fem-splaining it to me.”
            
A Tumblr hashtag campaign called Women Against Feminism is predictably causing an internet furor.

The Tumblr site features women holding handmade signs advertising their reasons for opposing feminism in its current incarnation. The movement explains its position to make clear that members are focused on extreme versions of feminism (and possibly to limit the backlash they receive from women — nearly 40 percent of whom still consider themselves feminists):

I don’t think “Anti-Feminism” is some kind of rigid ideology, creed, religion, or doctrine, even a real “ism.” I think it’s just an umbrella term for people who think there is something seriously wrong with the actions of people acting in the name of “feminism.” . . . Based on its overall actions, [feminism] is about socially engineering society to give special privileges to women and special punishments to men. That’s not equality. That’s not respecting genders. Once again, I don’t give a crap about your dictionary definition. It’s the actions that turned me against feminism. The actions don’t match the rhetoric.

This explanation is getting some hostile reactions, with thinkers including Ellen Page and Lena Dunham dismissing women who refuse to fight against the patriarchy for equality and human rights. Because the Internet and cats, there is even a Confused Cats Against Feminism Tumblr page.

Advertisement
According to outlets such as Bustle.com, Vice.com, and Cosmopolitan, it is the campaign’s supporters who are confused. In response to the campaign, several Twitter users have tweeted some variation of this statement: “The only thing #WomenAgainstFeminism has taught me is that there are lots of women who have no idea what feminism is.”

Well, what is it then? The popular conception holds that the movement has gone through three distinct stages in the past century.

ADVERTISEMENT

First-wave feminism (from the late 19th to the early 20th centuries) was characterized primarily by the fight for women’s suffrage. The sexual revolution and abortion rights came during the second wave, in the 1960s and 1970s. Contemporary feminism, the third wave (from the 1990s to the present), has incorporated post-colonial and post-modern thinking, treating what used to be considered biological facts or innate tendencies as arbitrary social constructs.

Some have also noted that while the distinction between the first and third waves is categorical, the second and third waves run on more of a continuum and are sometimes indistinguishable. The deconstruction of traditional sexual morality beginning in the 1960s separated “ought” from “is” regarding sex. By the 1990s, some feminists began to deny even objective biological and social facts if they interfered with ideology. The Exposing Feminism blog has debunked many of these myths, including those about campus rape statistics and the so-called wage gap.

Critics berate the anti-feminist movement for confusing the different waves of feminism. These same critics then respond to complaints against the distinctly third-wave incarnation by invoking the accomplishments of the first wave — pointing out, correctly, that the right of women to vote was a hard-won victory over strong opposition. But this is a straw man reply to the Women Against Feminism movement.

The women who send pictures to the Women Against Feminism Tumblr page may not know or care to study all the nuances of feminism through the ages. What they do experience is the culture that contemporary feminists are in actuality trying to create for all the members of their sex. Most women today support aspects of traditional feminism, but that support does not mean blanket support for all of contemporary feminism’s agenda.

Feminists seem upset by this selective support, or simply deny altogether that it is possible. If one doesn’t affirm the notion of rape culture or the necessity of feminist biology, then according to feminists, neither does she appreciate laws against marital rape or universal suffrage. They would prefer that women deny their own common sense in order to support implausible ideas such as the belief that drawing any distinctions between humans threatens justice, or that a woman can behave with any degree of sexual license and not expect men to interpret her behavior as they naturally do. Ultimately, feminist biology might be a nice idea, but when you’re visiting the doctor you’re better off with accurate biology.

In 1994, Katie Roiphe wrote about the feminist crusade against campus rape culture: “These feminists are endorsing their own utopian vision of sexual relations: sex without struggle, sex without power, sex without persuasion, sex without pursuit. If verbal coercion constitutes rape, then the word rape itself expands to include any kind of sex a woman experiences as negative.” Remaking sex into something it isn’t — a consumerist transaction that is fundamentally the same for both parties — doesn’t address the horror of rape.

Several people tweeted that they need feminism because women “need self-agency.” Actually, women don’t need self-agency (or simply “agency”), as if it were an external good; they possess it intrinsically because they are human beings.

A failure to respect women is, in fact, a failure to respect all humans as equally human. Feminism won’t solve rape or domestic abuse or misogyny because it doesn’t address the actual cause of these problems. Ultimately, Women Against Feminism condemns contemporary feminism because for any legitimate issues it raises, feminism cites gender itself — rather than evil human behavior — as the cause.
        
        </p>
@stop

