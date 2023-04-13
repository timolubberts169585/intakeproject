function checkAntwoord(test) {
    if (test > 10) {
      return "Right";
    } else {
      return "Wrong";
    }
  }
  
  // Example usage:
  console.log(checkNumber(5)); // Output: "Wrong"
  console.log(checkNumber(15)); // Output: "Right"

let answer = true;

if (answer === true) {
  console.log("The answer is true");
} else {
  console.log("The answer is false");
}

let antwoord = ["test1", "test2", "test3","test4", "test5", "test6","test7", "test8", "test9", "test10"];
let vraag = ["test1", "test2", "test1","test4", "test1", "test6","test7", "test1", "test9", "test10"];
  
  let Correct = 0;
  
  for (let i = 0; i < vraag.length; i++) {
    if (antwoord.includes(vraag[i])) {
      Correct++;
    }
  }
  
  let percentage = (Correct / userAnswers.length) * 100;

  if (percentage > 70 && percentage < 11){
    console.log("Je hebt" + percentage + "% van de vragen goed");
    console.log("Helaas, Je kennis is nog niet goed genoeg. Probeer nog iets meer te leren en overleg met je ouders of deze opleiding echt bij je past.");
  } else if (percentage > 11){
    console.log("Je hebt" + percentage + "% van de vragen goed");
    console.log("je hebt best veel fout, misschien is het handiger om een andere richting te kiezen.");
  } else{
    console.log("Je hebt" + percentage + "% van de vragen goed");
    console.log("Goed gedaan, je hebt al veel kennis voor deze opleiding");

  }
  


