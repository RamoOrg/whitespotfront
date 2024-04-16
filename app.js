console.log("Hello from noteApp");
showNotes();
let addBtn=document.getElementById('addBtn');
addBtn.addEventListener('click',function(e){
	let addTxt=document.getElementById('addTxt');
	let niteTitle=document.getElementById('noteTitle');
	let notes=localStorage.getItem('notes');
		if(notes==null){
			notesObj=[];
		}else{
			notesObj=JSON.parse(notes);
		}
		myobj={
			tittle:niteTitle.value,
			note:addTxt.value
		}
		notesObj.push(myobj);
		localStorage.setItem('notes',JSON.stringify(notesObj));
		addTxt.value='';
		niteTitle.value='';
		showNotes();


});
function showNotes(){
	console.log('hello form showNotes');
	let notes=localStorage.getItem('notes');
		if(notes==null){
			notesObj=[];
		}else{
			notesObj=JSON.parse(notes);
		}
	let html='';
	notesObj.forEach(function(element, index){
		html += `<div class="card my-2 mx-2 noteCard" style="width: 18rem;">
	                <div class="card-body">
	                    <h5 class="card-title">Note Title${index+1}</h5>
						<h6 class="card-title">${element.tittle} </h6>
						
	                    <p class="card-text">${element.note}</p>
	                    <a id="${index}" onclick="deleteNote(this.id)" class="btn btn-primary">Delete</a>
	                </div>
	            </div>`;
	});

	let notesElm=document.getElementById('notes');
	if(notesObj.length!=0){
		notesElm.innerHTML=html;
	}
	else{
		notesElm.innerHTML=`Nothing to show`;
	}
}
function deleteNote(id){
	console.log(id);
	let notes=localStorage.getItem('notes');
	if(notes==null){
		notesObj=[];
	}else{
		notesObj=JSON.parse(notes);
	}
	notesObj.splice(id, 1);
	localStorage.setItem('notes',JSON.stringify(notesObj));
	showNotes();
}

let searchTxt=document.getElementById('searchTxt');

searchTxt.addEventListener('input', function(){
	let inputText=searchTxt.value.toLowerCase();

	console.log("i?p   "+inputText);
	// console.log(searchTxt.value);
	cardEml=document.getElementsByClassName('noteCard');
	Array.from(cardEml).forEach(function(element){
		let cardText=element.getElementsByTagName('p')[0].innerText;
		console.log(cardText);
		if(cardText.includes(inputText)){
			console.log('block');
			element.style.display="block";
		}else{
			console.log('none');
			element.style.display="none";
		}
	});
	// console.log(cardEml);
})
console.log(addBtn);