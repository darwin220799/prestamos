<?php
// PERMISOS SOBRE ADMINISTRATIVOS

// const PERMISSION_CREATE = 'PERMISSION_CREATE';
// const PERMISSION_READ = 'PERMISSION_READ';
// const PERMISSION_UPDATE = 'PERMISSION_UPDATE';
// const PERMISSION_DELETE = 'PERMISSION_DELETE';
// const ROLE_PERMISION_CREATE = 'ROLE_PERMISION_CREATE';
// const ROLE_PERMISION_READ = 'ROLE_PERMISION_READ';
// const ROLE_PERMISION_UPDATE = 'ROLE_PERMISION_UPDATE';
// const ROLE_PERMISION_DELETE = 'ROLE_PERMISION_DELETE';
const ROLE_CREATE = 'ROLE_CREATE';
const ROLE_READ = 'ROLE_READ';
const ROLE_UPDATE = 'ROLE_UPDATE';
const ROLE_DELETE = 'ROLE_DELETE';
// const USER_ROLE_CREATE = 'USER_ROLE_CREATE';
// const USER_ROLE_READ = 'USER_ROLE_READ';
// const USER_ROLE_UPDATE = 'USER_ROLE_UPDATE';
// const USER_ROLE_DELETE = 'USER_ROLE_DELETE';
const USER_CREATE = 'USER_CREATE';
const USER_READ = 'USER_READ';
const USER_UPDATE = 'USER_UPDATE';
const USER_DELETE = 'USER_DELETE';

const CUSTOMER_CREATE = 'CUSTOMER_CREATE';
const CUSTOMER_READ = 'CUSTOMER_READ';
const CUSTOMER_UPDATE = 'CUSTOMER_UPDATE';
const CUSTOMER_DELETE = 'CUSTOMER_DELETE';
const LOAN_CREATE = 'LOAN_CREATE';
const LOAN_READ = 'LOAN_READ';
const LOAN_UPDATE = 'LOAN_UPDATE';
const LOAN_DELETE = 'LOAN_DELETE';
const LOAN_ITEM_CREATE = 'LOAN_ITEM_CREATE';
const LOAN_ITEM_READ = 'LOAN_ITEM_READ';
const LOAN_ITEM_UPDATE = 'LOAN_ITEM_UPDATE';
const LOAN_ITEM_DELETE = 'LOAN_ITEM_DELETE';
// const GUARANTOR_CREATE = 'GUARANTOR_CREATE';
// const GUARANTOR_READ = 'GUARANTOR_READ';
// const GUARANTOR_UPDATE = 'GUARANTOR_UPDATE';
// const GUARANTOR_DELETE = 'GUARANTOR_DELETE';
// const MICROPAIMENT_CREATE = 'MICROPAIMENT_CREATE';
// const MICROPAIMENT_READ = 'MICROPAIMENT_READ';
// const MICROPAIMENT_UPDATE = 'MICROPAIMENT_UPDATE';
// const MICROPAIMENT_DELETE = 'MICROPAIMENT_DELETE';
const COIN_CREATE = 'COIN_CREATE';
const COIN_READ = 'COIN_READ';
const COIN_UPDATE = 'COIN_UPDATE';
const COIN_DELETE = 'COIN_DELETE';

const AUTHOR_CUSTOMER_CREATE = 'AUTHOR_CUSTOMER_CREATE';
const AUTHOR_CUSTOMER_READ = 'AUTHOR_CUSTOMER_READ';
const AUTHOR_CUSTOMER_UPDATE = 'AUTHOR_CUSTOMER_UPDATE';
const AUTHOR_CUSTOMER_DELETE = 'AUTHOR_CUSTOMER_DELETE';
const AUTHOR_LOAN_CREATE = 'AUTHOR_LOAN_CREATE';
const AUTHOR_LOAN_READ = 'AUTHOR_LOAN_READ';
const AUTHOR_LOAN_UPDATE = 'AUTHOR_LOAN_UPDATE';
const AUTHOR_LOAN_DELETE = 'AUTHOR_LOAN_DELETE';
const AUTHOR_LOAN_ITEM_CREATE = 'AUTHOR_LOAN_ITEM_CREATE';
const AUTHOR_LOAN_ITEM_READ = 'AUTHOR_LOAN_ITEM_READ';
const AUTHOR_LOAN_ITEM_UPDATE = 'AUTHOR_LOAN_ITEM_UPDATE';
const AUTHOR_LOAN_ITEM_DELETE = 'AUTHOR_LOAN_ITEM_DELETE';
// const AUTHOR_GUARANTOR_CREATE = 'AUTHOR_GUARANTOR_CREATE';
// const AUTHOR_GUARANTOR_READ = 'AUTHOR_GUARANTOR_READ';
// const AUTHOR_GUARANTOR_UPDATE = 'AUTHOR_GUARANTOR_UPDATE';
// const AUTHOR_GUARANTOR_DELETE = 'AUTHOR_GUARANTOR_DELETE';
// const AUTHOR_MICROPAIMENT_CREATE = 'AUTHOR_MICROPAIMENT_CREATE';
// const AUTHOR_MICROPAIMENT_READ = 'AUTHOR_MICROPAIMENT_READ';
// const AUTHOR_MICROPAIMENT_UPDATE = 'AUTHOR_MICROPAIMENT_UPDATE';
// const AUTHOR_MICROPAIMENT_DELETE = 'AUTHOR_MICROPAIMENT_DELETE';

const PAYMENT_CREATE = 'PAYMENT_CREATE';
const PAYMENT_READ = 'PAYMENT_READ';
const PAYMENT_UPDATE = 'PAYMENT_UPDATE';
const PAYMENT_DELETE = 'PAYMENT_DELETE';

const AUTHOR_PAYMENT_CREATE = 'AUTHOR_PAYMENT_CREATE';
const AUTHOR_PAYMENT_READ = 'AUTHOR_PAYMENT_READ';
const AUTHOR_PAYMENT_UPDATE = 'AUTHOR_PAYMENT_UPDATE';
const AUTHOR_PAYMENT_DELETE = 'AUTHOR_PAYMENT_DELETE';

const DOCUMENT_PAYMENT_CREATE = 'DOCUMENT_PAYMENT_CREATE';
const DOCUMENT_PAYMENT_READ = 'DOCUMENT_PAYMENT_READ';
const DOCUMENT_PAYMENT_UPDATE = 'DOCUMENT_PAYMENT_UPDATE';
const DOCUMENT_PAYMENT_DELETE = 'DOCUMENT_PAYMENT_DELETE';

const AUTHOR_DOCUMENT_PAYMENT_CREATE = 'AUTHOR_DOCUMENT_PAYMENT_CREATE';
const AUTHOR_DOCUMENT_PAYMENT_READ = 'AUTHOR_DOCUMENT_PAYMENT_READ';
const AUTHOR_DOCUMENT_PAYMENT_UPDATE = 'AUTHOR_DOCUMENT_PAYMENT_UPDATE';
const AUTHOR_DOCUMENT_PAYMENT_DELETE = 'AUTHOR_DOCUMENT_PAYMENT_DELETE';

const CASH_REGISTER_CREATE = 'CASH_REGISTER_CREATE';
const CASH_REGISTER_READ = 'CASH_REGISTER_READ';
const CASH_REGISTER_UPDATE = 'CASH_REGISTER_UPDATE';
const CASH_REGISTER_DELETE = 'CASH_REGISTER_DELETE';

const AUTHOR_CASH_REGISTER_CREATE = 'AUTHOR_CASH_REGISTER_CREATE';
const AUTHOR_CASH_REGISTER_READ = 'AUTHOR_CASH_REGISTER_READ';
const AUTHOR_CASH_REGISTER_UPDATE = 'AUTHOR_CASH_REGISTER_UPDATE';
const AUTHOR_CASH_REGISTER_DELETE = 'AUTHOR_CASH_REGISTER_DELETE';

const LEGAL_PROCESS_CREATE = 'LEGAL_PROCESS_CREATE';
const LEGAL_PROCESS_READ = 'LEGAL_PROCESS_READ';
const LEGAL_PROCESS_UPDATE = 'LEGAL_PROCESS_UPDATE';
const LEGAL_PROCESS_DELETE = 'LEGAL_PROCESS_DELETE';

// Avatares por defecto
const AVATARS = ['0000000.png'];

// MESSAGES
const PERMISSION_DENIED_MESSAGE =  "<script> 
alert('Permiso denegado...');
window.history.back();
</script>";