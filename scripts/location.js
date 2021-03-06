var datam = [
	"Mumbai",
	"Delhi",
  	"Bangalore",
  	"Hyderabad",
  	"Ahmedabad",
	"Chennai",
	"Kolkata",
	"Surat",
	"Pune",
	"Jaipur",
	"Lucknow",
	"Kanpur",
	"Nagpur",
	"Indore",
	"Thane",
	"Bhopal",
	"Visakhapatnam",
	"Pimpri & Chinchwad",
	"Patna",
	"Vadodara",
	"Ghaziabad",
	"Ludhiana",
	"Agra",
	"Nashik",
	"Faridabad",
	"Meerut",
	"Rajkot",
	"Kalyan & Dombivali",
	"Vasai Virar",
	"Varanasi",
	"Srinagar",
	"Aurangabad",
	"Dhanbad",
	"Amritsar",
	"Navi Mumbai",
	"Allahabad",
	"Ranchi",
	"Haora",
	"Coimbatore",
	"Jabalpur",
	"Gwalior",
	"Vijayawada",
	"Jodhpur",
	"Madurai",
	"Raipur",
	"Kota",
	"Guwahati",
	"Chandigarh",
	"Solapur",
	"Hubli and Dharwad",
	"Bareilly",
	"Moradabad",
	"Mysore",
	"Gurgaon",
	"Aligarh",
	"Jalandhar",
	"Tiruchirappalli",
	"Bhubaneswar",
	"Salem",
	"Mira and Bhayander",
	"Thiruvananthapuram",
	"Bhiwandi",
	"Saharanpur",
	"Gorakhpur",
	"Guntur",
	"Bikaner",
	"Amravati",
	"Noida",
	"Jamshedpur",
	"Bhilai Nagar",
	"Warangal",
	"Cuttack",
	"Firozabad",
	"Kochi",
	"Bhavnagar",
	"Dehradun",
	"Durgapur",
	"Asansol",
	"Nanded Waghala",
	"Kolapur",
	"Ajmer",
	"Gulbarga",
	"Jamnagar",
	"Ujjain",
	"Loni",
	"Siliguri",
	"Jhansi",
	"Ulhasnagar",
	"Nellore",
	"Jammu",
	"Sangli Miraj Kupwad",
	"Belgaum",
	"Mangalore",
	"Ambattur",
	"Tirunelveli",
	"Malegoan",
	"Gaya",
	"Jalgaon",
	"Udaipur",
	"Maheshtala"
  	];
  
var skills = [
  "Backend Development",
  "Network Architecture",
  "iOS Development",
  "Quality Assurance",
  "Game Design and Development",
  "Information Security",
  "Design Engineering",
  "Graphic Designing",
  "Frontend Development",
  "Android Development",
  "System Administration",
  "Data Architecture",
  "Network Security",
  "ERP",
  "UX",
  "CakePHP",
  "Angular.js",
  "Amazon Web Services",
  "Azure",
  "C++",
  "C",
  "CSS",
  "JQuery",
  "JSON",
  "JavaScript",
  "HTML",
  "PHP",
  "SQL",
  "Scala",
  "Lua",
  "Pascal",
  "C#",
  "Python 3",
  "PostgreSQL",
  "Kotlin",
  "Perl",
  "Haskell",
  "D",
  "C++14",
  "R(RScript)",
  "C++11",
  "Go",
  "Ruby",
  "Groovy",
  "LOLCODE",
  "Lisp",
  "MySQL",
  "Objective-C",
  "Python",
  "Visual Basic",
  "Java 8",
  "JavaScript(Node.js)",
  "Racket",
  "Swift",
  "Rust",
  "F#",
  "OCaml",
  "Octave",
  "Clojure",
  "Befunge",
  "Erlang",
  "Java",
  "Lisp (SBCL)",
  "Julia",
  "Oracle Database",
  "Bootstrap",
  "Laravel",
  "MongoDb",
  "Ruby on Grails",
  "Express",
  "Angular",
  "Vue",
  "React",
  "Code Ignitor",
  "ASP"
];
/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(
  /* This is the function that will get executed after the DOM is fully loaded */
  function() {
	$( "#skills" ).autocomplete({
      /*Source refers to the list of fruits that are available in the auto complete list. */
	    source: function(request, response) {
        var results = $.ui.autocomplete.filter(skills, request.term);
        response(results.slice(0,8));
	   }
    });
	  
	$("#tags").autocomplete({
      /*Source refers to the list of fruits that are available in the auto complete list. */
     	source: function(request, response) {
        var results = $.ui.autocomplete.filter(datam, request.term);
        response(results.slice(0,8));
	   }
    });
  }
	
);