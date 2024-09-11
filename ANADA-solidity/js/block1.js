var web3;
var address = "0xb01BaB2Ff4e8150d3b7079Cd175bE2a36b3bF4A1";

async function Connect(){
	console.log('fenferfre');
    await window.web3.currentProvider.enable();
    web3 = new Web3(window.web3.currentProvider);
}

if(typeof web3 !== 'undefine'){
    web3 = new Web3(window.web3.currentProvider);
}
else{
    web3 = new Web3(new Web3.Provider.HttpProvider("HTTP://127.0.0.1:7545"));
}

var abi =[
	{
		"constant": false,
		"inputs": [
			{
				"name": "_numActe",
				"type": "string"
			},
			{
				"name": "_nomE",
				"type": "string"
			}
		],
		"name": "ajouterActe",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_numActe",
				"type": "string"
			},
			{
				"name": "_nomE",
				"type": "string"
			}
		],
		"name": "afficheActe",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
];

var contract = new web3.eth.Contract(abi,address);

function deposite(){
	
    var inputval1 = document.getElementById("numActe").value;
	console.log(inputval1);

   
    var inputval2 = document.getElementById("nomE").value;

	document.getElementById("num").value = inputval1;
	document.getElementById("nom").value = inputval2;

    web3.eth.getAccounts().then(function(account){
		console.log(inputval1);
		console.log(inputval2);
		
        return contract.methods.ajouterActe(inputval1,inputval2).send({from: account[0]});

	}).then(function(tmp){
		$("#numActe").val("");
        $("#nomE").val("");
        
    }).catch(function(tmp){
        alert(tmp);
    })

}



function show_balance(){
    
	var inputval1 = document.getElementById("numActe").value;
    var inputval2 = document.getElementById("nomE").value;
	console.log(inputval1);
	
	document.getElementById("search").value = inputval1;
	document.getElementById("search1").value = inputval2;
	// document.getElementById('cacher').style.display=="block";

    contract.methods.afficheActe(inputval1, inputval2).call().then(function(balance){
                
        $("#result").html(balance);
		// document.getElementById("numAct").value = balance;
		if(balance == '')
		{
			alert('Votre acte de mariage est inexistant');
			
			// document.getElementById('cacher').style.display=="block";
		}
		else
		{
			alert('Votre acte de mariage est existant');
			
			

			// document.getElementById('cacher').style.display=="none";
		}
       
    })

	

    
}