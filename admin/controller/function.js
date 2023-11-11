// JavaScript Document
function checkall(class_name,obj){
	//duyet qua cacs checkbox cos class=class_name(item)
	//tra ve cac phan tu o dang mang, bat dau tu vi tri 0
	var items=document.getElementsByClassName(class_name);
	if(obj.checked==true)//da duoc chon
	{
		for(i=0;i<items.length;i++)
		items[i].checked=true;	
	}	
	else{
		for(i=0;i<items.length;i++)
		items[i].checked=false;	
	}
}