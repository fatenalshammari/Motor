function updateTextInput1(val) {
          document.getElementById('textInput1').value=val;
        }

function updateTextInput2(val) {
          document.getElementById('textInput2').value=val;
        }


function updateTextInput3(val) {
          document.getElementById('textInput3').value=val;
         }


function updateTextInput4(val) {
          document.getElementById('textInput4').value=val;
          }


function updateTextInput5(val) {
          document.getElementById('textInput5').value=val;
          }


function updateTextInput6(val) {
          document.getElementById('textInput6').value=val;
          }



function onoff(){
  currentvalue = document.getElementById('run').value;
  if(currentvalue == "Off"){
    document.getElementById("onoff").value="On";
  }else{
    document.getElementById("onoff").value="Off";
  }
}
