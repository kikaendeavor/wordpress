function selectTab(showContent,selfObj){
	// ������ǩ
	var tab = document.getElementById("tabs").getElementsByTagName("li");
	var tablength = tab.length;
	for(i=0; i<tablength; i++){
		tab[i].className = "";
	}
	selfObj.parentNode.className = "selectTab";
	// ��������
	for(i=0; j=document.getElementById("tabContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
	
	
}

function selectTabTwo(showContent,selfObj){
	// ������ǩ
	var tabTwo = document.getElementById("tabTwos").getElementsByTagName("li");
	var tabTwolength = tabTwo.length;
	for(i=0; i<tabTwolength; i++){
		tabTwo[i].className = "";
	}
	selfObj.parentNode.className = "selectTabTwo";
	// ��������
	for(i=0; j=document.getElementById("tabTwoContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
}

//var selectTabObj = null;
//
//function timeProc(){
//	var tabs = document.getElementById("tabs").getElementsByTagName("li");
//	var j=-1;
//	for(var i=0;i<tabs.length;i++){
//		if(tabs[i].className!="selectTab") continue;
//
//		// �ҵ���ǰ��tab��������һ��
//		j = i+1;
//		break;
//	}
//	if(j==tabs.length) j=0;
//	var contextId = "TabContent"+j;
//	selectTab(contextId,tabs[j].children[0]);
//	bodyOnLoad();
//}
//
//window.onload = function bodyOnLoad(){
//	setTimeout(timeProc,1000);
//}