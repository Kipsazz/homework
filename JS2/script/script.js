var colorTitle = "red";

var colorParagraph = "blue";

var title = "Skyrius1";

var output;

var article =
	"Magna ita offendit, anim quibusdam philosophari, an quid praetermissum nam nisi 		despicationes nescius elit commodo. Ita et distinguantur de id pariatur id laborum, ubi enim probant proident ad duis aut pariatur, sunt iudicem		concursionibus nam fore ab voluptate do nulla consectetur voluptate elit		aliquip, legam ad admodum et quid. Quae probant an commodo, litteris de summis 		ullamco. Est legam nostrud arbitrantur ex si a culpa fore quorum est an amet 		quis est aliquip, enim incididunt quo praetermissum. Eu pariatur ab fabulas. Minim nescius cohaerescant, qui quorum eram de singulis.";
var articleLength = article.length;

outputToHtml = ("<h1>" + title.fontcolor(colorTitle) + "</h1>" +

			   "<p>" + article.fontcolor(colorParagraph) + "</p>" +

			   "<p>"+"Tekste yra" + " " + articleLength + " " + "symboliu"+"</p>")


document.write(outputToHtml);

