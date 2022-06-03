const transactionsUl = document.querySelector('#transactions')
const balanceDisplay = document.querySelector('#balance')
const form = document.querySelector('#form')
const inputTransactionName = document.querySelector('#text')
const inputTransactionAmount = document.querySelector('#amount')
var total

let dummyTransactions = [
    {id: 1, name: 'Bolo de brigadeiro', amount: 20},
    {id: 2, name: 'Torta de frango', amount: 40},
    {id: 3, name: 'Hamburguer', amount: 60},
    {id: 4, name: 'Coxinha', amount: 80},
]

const removeTransaction = ID => {
    dummyTransactions = dummyTransactions.filter(transaction => transaction.id !== ID)
    init()
}

const addTransactionIntoDOM = transaction => {
    const li = document.createElement('li')
    const CSSClass = transaction.amount < 0 ? 'minus' : 'plus'
    const amountWithoutOperator = Math.abs(transaction.amount)

    li.classList.add(CSSClass)
    li.innerHTML = `
        ${transaction.name} 
        <span>${amountWithoutOperator} kcal</span>
        <button class="delete-btn" onClick="removeTransaction(${transaction.id})">
            x
        </button>
    `

    transactionsUl.prepend(li)
}

const updateBalanceValues = () => {
    const transactionsAmounts = dummyTransactions.map(transaction => transaction.amount)
    total = transactionsAmounts.reduce((accumulator, transaction) => accumulator + transaction, 0)
    
    balanceDisplay.textContent = `${total} kcal`
}

const init = () => {
    transactionsUl.innerHTML = ''
    dummyTransactions.forEach(addTransactionIntoDOM)
    updateBalanceValues()
}

init()

const generateID = () => Math.round(Math.random() * 1000)

form.addEventListener('submit', event => {
    event.preventDefault()

    const transactionName = inputTransactionName.value.trim()
    const transactionsAmount = inputTransactionAmount.value.trim()

    if (transactionName == '' || transactionsAmount == ''){
        alert('Por favor, preencha tanto o nome quanto o valor da transação!')
        return
    }

    const transaction = {
        id: generateID(), 
        name: transactionName, 
        amount: Number(transactionsAmount)
    }

    dummyTransactions.push(transaction)
    init()

    inputTransactionName.value = ''
    inputTransactionAmount.value = ''

    console.log('teste');

    fetch(`contCal.php?requisicao=requisicaoTotal&total=${total}`)
    .then((response) => {
        console.log(response)
        return response;
    })
})