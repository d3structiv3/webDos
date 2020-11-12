function setTXT() {
    var nombre = document.getElementById("nombre").value;
    var mat1 = document.getElementById("mat1").value;
    var mat2 = document.getElementById("mat2").value;
    var mat3 = document.getElementById("mat3").value;
    var mat4 = document.getElementById("mat4").value;
    var Cal1 = document.getElementById("cal1").value;
    var Cal2 = document.getElementById("cal2").value;
    var Cal3 = document.getElementById("cal3").value;
    var Cal4 = document.getElementById("cal4").value;
    var Cal5 = document.getElementById("cal5").value;
    var Cal6 = document.getElementById("cal6").value;
    var Cal7 = document.getElementById("cal7").value;
    var Cal8 = document.getElementById("cal8").value;
    var Cal9 = document.getElementById("cal9").value;
    var Cal10 = document.getElementById("cal10").value;
    var Cal11 = document.getElementById("cal11").value;
    var Cal12 = document.getElementById("cal12").value;
    var Cal13 = document.getElementById("cal13").value;
    var Cal14 = document.getElementById("cal14").value;
    var Cal15 = document.getElementById("cal15").value;
    var Cal16 = document.getElementById("cal16").value;

    console.log("Click"); 
    var textToSave ="Alumno: "+nombre+"|n"+
                    mat1+" : "+" U1: "+Cal1+" U2: "+Cal2+" U3: "+Cal3+" U4: "+Cal4+ "\n"
                    mat2+" : "+" U1: "+Cal5+" U2: "+Cal6+" U3: "+Cal7+" U4: "+Cal8+ "\n"
                    mat3+" : "+" U1: "+Cal9+" U2: "+Cal10+" U3: "+Cal11+" U4: "+Cal12+ "\n"
                    mat4+" : "+" U1: "+Cal13+" U2: "+Cal14+" U3: "+Cal15+" U4: "+Cal16;

    var textToSaveAsBlob = new Blob([textToSave], { type: "text/plain" });
    var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
    var fileNameToSaveAs = document.getElementById("guardar").value;

    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    downloadLink.href = textToSaveAsURL;
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);

    downloadLink.click();
}
function destroyClickedElement(event) {
    document.body.removeChild(event.target);
}

function loadFileAsText() {
    var fileToLoad = document.getElementById("fileToLoad").files[0];

    var fileReader = new FileReader();
    fileReader.onload = function (fileLoadedEvent) {
        var textFromFileLoaded = fileLoadedEvent.target.result;
        document.getElementById("inputTextToSave").value = textFromFileLoaded;
    };
    fileReader.readAsText(fileToLoad, "UTF-8");
}