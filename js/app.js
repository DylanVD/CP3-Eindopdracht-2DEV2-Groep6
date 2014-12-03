(function(){
	var numberOfClicks = 0;
	function init(){
		imageUpload();

for(var i = 0; i < 20; i++){ //LENGTE VAN IMGAGE ARRAY!!!!!!!
	var move_image = new Move_image(380,50);
	document.body.appendChild(move_image.el);
}

}

function imageUpload(){
	if (window.File && window.FileReader && window.FileList && window.Blob) {

    var form = document.getElementById('uploadform');

    if(form){
        var fileUpload = form.querySelector('input[type=file]');
        var errorSpan = form.querySelector('.error-message');

        fileUpload.addEventListener('change', fileUploadChangeHandler);

        function fileUploadChangeHandler(event){
            var file = fileUpload.files[0];


            if(file.type.indexOf('image')=== 0){
                //ok
                errorSpan.style.display = 'none';

                var reader = new FileReader();
                reader.onload = function(){
                    var img = document.createElement('img');
                    img.onLoad = function(){
                        if(img.width > 300 && img.height > 300){
                            errorSpan.style.display ='move_image';
                            errorSpan.innerText= 'image must be smaller than 300x300px';
                        }else{
                            form.appendChild(img);
                        }
                    };
                    img.setAttribute('src',reader.result);
                };
                reader.readAsDataURL(file);

            }else{
                //niet ok
                errorSpan.style.display = 'move_image';
                errorSpan.innerText = 'not an image';
            }
        }
    }
	}
}

function Move_image(xPos, yPos){

	//klasse toevoegen
	this.el = document.getElementById('move_image');

	//random postitie
	this.el.style.left =  xPos + 'px'; //zie math.random
	this.el.style.top = yPos + 'px';

	this._mouseDownHandler = this.mouseDownHandler.bind(this);//met bind verwijst naar block ipv naar el
	this._mouseMoveHandler = this.mouseMoveHandler.bind(this);
	this._mouseUpHandler = this.mouseUpHandler.bind(this);

	this.el.addEventListener('mousedown', this._mouseDownHandler);
}

Move_image.prototype.mouseDownHandler = function(event){
	//bereken wat de afstand van de muis is ten opzichte van rechterbovenhoek van div
	this.offsetX = event.offsetX;
	this.offsetY = event.offsetY;

	//boven andere objecten plaatsen
	numberOfClicks ++;
	this.el.style.zIndex = numberOfClicks;

	window.addEventListener('mousemove', this._mouseMoveHandler);
	window.addEventListener('mouseup', this._mouseUpHandler);
}

Move_image.prototype.mouseMoveHandler = function(event){
	this.el.style.left = (event.x - this.offsetX)+ 'px';
	this.el.style.top = (event.y - this.offsetY) + 'px';
}

Move_image.prototype.mouseUpHandler = function(event){
	window.removeEventListener('mousemove', this._mouseMoveHandler);
	window.removeEventListener('mouseup', this._mouseUpHandler);
}

init();
})();

