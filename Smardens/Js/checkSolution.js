var answers = ['C','A','C','D'];
//total number of questions
var total = 4;
var totalCorrect = 0;

//get individual answers from the radio button
function checkIndividual(radioName)
{
  var radio = document.getElementsByName(radioName);
  for (var i = 0; i< radio.length; i++)
  {
    if(radio[i].checked)
    {
      return radio[i].value;
    }
  }
}

//check if the user answer matches the solution, increment by 1 if one question is correct.
function checkSolution()
{
  for(var i = 0; i< answers.length;i++)
  {
    if(checkIndividual("Q"+(i+1))==answers[i])
    {
      totalCorrect++;
    }
  }
//if the user get all the question right, display correct, else ask user try again.
  if(totalCorrect==4)
  {
    alert("Awesome! You get all the answers! Keep paying attention on saving water and make the planet better!");
  }
  else {
    alert("Opps, you did not get full score. Go back and read about the issue and try again.");
  } 
  total = 0;
}
