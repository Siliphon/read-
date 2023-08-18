<?php
include 'dry.php';

$lang = [
    'Account Name' => $account_name,
    'Account Name Already exist,please change your Account Name!' => 'ຊື່ບັນຊີມີຢູ່ແລ້ວ,ກະລຸນາປ່ຽນຊື່ບັນຊີຂອງທ່ານ!',
    'Account name already used!' => 'ຊື່ບັນຊີຖືກໃຊ້ແລ້ວ!',
    'Address' => 'ທີ່ຢູ່',
    'Already exist!' => 'ມີຢູ່ແລ້ວ!',
    'Bank' => $bank,
    'Bank Account' => 'ບັນຊີທະນາຄານ',
    'Bank Account Name' => $bank_account_name,
    'Bank NO' => 'ຕົວເລກທະນາຄານ',
    'Bank NO  Already exist,please change your Bank NO!' => 'ເລກທະນາຄານມີຢູ່ແລ້ວ,ກະລຸນາປ່ຽນຕົວເລກທະນາຄານຂອງທ່ານ!',
    'Bank NO. already used!' => 'ເລກທະນາຄານ. ຖືກໃຊ້ແລ້ວ!',
    'Bank Name' => $bank_name,
    'Bank account Information' => 'ຂໍ້ມູນບັນຊີທະນາຄານ',
    'Bank account name should be within 2-50 alphanumeric' => 'ຊື່ບັນຊີທະນາຄານຄວນຢູ່ພາຍໃນ 2-50 ຕົວເລກ',
    'Bank account unavailable' => 'ຜິດພາດ:ບັນຊີທະນາຄານບໍ່ມີ!',
    'Cancel' => 'ຍົກເລີກ',
    'Cellphone' => 'ໂທລະສັບມືຖື',
    'Code' => $code,
    'Confirm Password' => 'ຢືນຢັນລະຫັດຜ່ານ',
    'Contact Number' => 'ເລກຕິດຕໍ່',
    'Create an Account' => 'ສ້າງ​ບັນ​ຊີ',
    'Currency' => 'ສະກຸນເງິນ',
    'Domain' => 'ຂອບເຂດກຳນົດ',
    'Email' => 'ອີເມລ',
    'Existing account?' => 'ມີບັນຊີແລ້ວບໍ?',
    'Existing bank account' => 'ຜິດພາດ:ບັນຊີທະນາຄານມີແລ້ວ!',
    'Failed to Register Member!' => 'ລົງທະບຽນສະມາຊິກລົ້ມເຫຼວ!',
    'Failed to register affiliate!' => 'ລົງທະບຽນຮ່ວມລົ້ມເຫຼວ!',
    'Field  Cell phone cannot empty!' => 'ຊ່ອງບັນທຶກໂທລະສັບມືຖືບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field Account Name cannot empty!' => 'ຊ່ອງບັນທຶກບັນຊີບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field Bank  cannot empty!' => 'ຊ່ອງບັນທຶກທະນາຄານບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field Bank Account cannot empty!' => 'ຊ່ອງບັນທຶກບັນຊີທະນາຄານບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field Bank No. cannot empty!' => 'ຊ່ອງບັນທຶກຕົວເລກທະນາຄານບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field Bank cannot empty!' => 'Field Bank ບໍ່ສາມາດຫວ່າງໄດ້!',
    'Field confirm password cannot empty!' => 'ຊ່ອງບັນທຶກຢືນຢັນລະຫັດຜ່ານບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field email cannot empty!' => 'ຊ່ອງບັນທຶກອີເມລບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Field password cannot empty!' => 'ຊ່ອງບັນທຶກລະຫັດຜ່ານບໍ່ສາມາດເປົ່າຫວ່າງ!',
    'Full Name' => 'ຊື່ເຕັມ',
    'Information incorrect' => 'ຜິດພາດ:ຂໍ້ມູນຜິດພາດ!',
    'Invalid Password' => 'ລະຫັດຜ່ານໃຊ້ການບໍ່ໄດ້',
    'Invalid Username' => 'ຊື່ຜູ້ໃຊ້ໃຊ້ການບໍ່ໄດ້',
    'Invalid contact number' => 'ເລກຕິດຕໍ່ໃຊ້ການບໍ່ໄດ້',
    'Login' => 'ກະລຸນາເຂົ້າລະບົບ',
    'Mobile Number' => 'ເລກໂທລະສັບມືຖື',
    'Not Match!' => 'ບໍ່ເຂົ້າກັນໄດ້!',
    'Password' => 'ລະຫັດຜ່ານ',
    'Password must contain: alphabet and numbers ,length is 8 to 20!' => 'ລະຫັດຜ່ານຈະຕ້ອງປະກອບດ້ວຍ: ອັກສອນ ແລະ ຕົວເລກ, ຄວາມຍາວແມ່ນ 8 ຫາ 20!',
    'Phone Number' => 'ເບີ​ໂທລະ​ສັບ',
    'Please Fill in Captcha!' => 'ກະລຸນາຕື່ມໃນແຄບຊາ!',
    'Please change you  Account Name,Cant have' => 'ກະລຸນາປ່ຽນຊື່ບັນຊີ,ບໍ່ສາມາດມີ',
    'Please enter confirm password!' => 'ກະລຸນາກົດເຂົ້າຢືນຢັນລະຫັດຜ່ານ!',
    'Please enter contact number!' => 'ກະລຸນາຕື່ມເລກຕິດຕໍ່!',
    'Please enter your bank account name' => 'ກະລຸນາໃສ່ຊື່ບັນຊີທະນາຄານຂອງທ່ານ',
    'Please enter your bank account number' => 'ກະລຸນາໃສ່ໝາຍເລກບັນຊີທະນາຄານຂອງທ່ານ',
    'Please enter your password!' => 'ກະລຸນາຕື່ມລະຫັດຜ່ານຂອງທ່ານເຂົ້າ!',
    'Please enter your username!' => 'ກະລຸນາຕື່ມຊື່ຜູ້ໃຊ້ຂອງທ່ານເຂົ້າ!',
    'Please enter your valid phone number' => 'ກະລຸນາໃສ່ເບີໂທລະສັບທີ່ຖືກຕ້ອງຂອງທ່ານ',
    'Please fill up the Sign Up form below' => 'ກະລຸນາຕື່ມແບບຟອມລົງທະບຽນຂ້າງລຸ່ມນີ້',
    'Please select a bank' => 'ກະລຸນາເລືອກທະນາຄານ',
    'Please select currency' => 'ກະລຸນາເລືອກສະກຸນເງິນ',
    'Please select your preferred currency!' => 'ກະລຸນາເລືອກສະກຸນເງິນທີ່ທ່ານມັກ!',
    'REFERRALL' => 'ອ້າງອີງ',
    'Referral' => 'ອ້າງອີງ',
    'Register affiliate successful, please contact us or waiting our call, thanks!' => 'ລົງທະບຽນຮ່ວມສຳເລັດ, ກະລຸນາຕິດຕໍ່ພວກເຮົາ ຫຼື ລໍຖ້າພວກເຮົາໂທຫາ, ຂອບໃຈ!',
    'Reset' => 'ຕັ້ງຄ່າຄືນ',
    'Select Currency' => 'ເລືອກສະກຸນເງິນ',
    'Sign Up' => 'ເຊັນຊື່ເຂົ້າຮ່ວມ',
    'Submit' => 'ສົ່ງ',
    'The password is too short!' => 'ລະຫັດຜ່ານສັ້ນເກີນໄປ!',
    'The password must contain: numbers and letters,length is 8 to 20!' => 'ລະຫັດຜ່ານຈະຕ້ອງມີ: ຕົວເລກ ແລະ ອັກສອນ,ຄວາມຍາວແມ່ນ is 8 ຫາ 20!',
    'The two password is not the same!' => 'ລະຫັດຜ່ານທັງສອງບໍ່ຄືກັນ!',
    'This E-mail already exists.' => 'ອີເມລນີ້ມີແລ້ວ.',
    'User names containing special symbols' => 'ຜິດພາດ:ຊື່ຜູ້ໃຊ້ປະກອບດ້ວຍສັນຍາລັກພິເສດ!',
    'Username' => 'ຊື່ຜູ້ໃຊ້',
    'Username already exists' => 'ຜິດພາດ:ຊື່ຜູ້ໃຊ້ມີແລ້ວ!',
    'Verification code has been sent' => 'ລະຫັດຢືນຢັນຖືກສົ່ງແລ້ວ!',
    'You should input  number,length is 6 to 20!' => 'ທ່ານຄວນຕື່ມຕົວອັກສອນ ຫຼື ຕົວເລກ, ຄວາມຍາວແມ່ນ ແຕ່ 6 ຫາ 20ຕົວ!',
    'You should input alphabet or number,length is 6 to 20!' => 'ທ່ານຄວນຕື່ມຕົວອັກສອນ ຫຼື ຕົວເລກ, ຄວາມຍາວແມ່ນ ແຕ່ 6 ຫາ 20 ຕົວ!',
    'You should input alphabet or number,length is 6 to 8!' => 'ທ່ານຄວນຕື່ມຕົວອັກສອນ ຫຼື ຕົວເລກ, ຄວາມຍາວແມ່ນ ແຕ່ 6 ຫາ 8ຕົວ!',
    'You should input alphabet or number,length is 6 to 9!' => 'ທ່ານຄວນຕື່ມຕົວອັກສອນ ຫຼື ຕົວເລກ, ຄວາມຍາວແມ່ນ ແຕ່ 6 ຫາ 9ຕົວ!',
    'You should input alphabet,number or blank,length is 3 to 20!' => 'ທ່ານຄວນຕື່ມຕົວອັກສອນ, ຕົວເລກ ຫຼື ຊ່ອງຫວ່າງ, ຄວາມຍາວແມ່ນ 2 ຫາ 20 ຕົວ!',
    'You should input alphabet,number or blank,length is 6 to 20!' => 'ທ່ານຄວນຕື່ມອັກສອນ,ຕົວເລກ ຫຼື ຊ່ອງຫວ່ງ,ຄວາມຍາວ ແມ່ນ 8 ຫາ 20 ຕົວ!',
    'You should input email such as XXX@XXX.XXX!' => 'ທ່ານຄວນຕື່ມອີເມລເຂົ້າ ເຊັ່ນ XXX@XXX.XXX!',
    'tel repeat' => 'ເລກໂທລະສັບນີ້ມີແລ້ວ',
    'Affiliate Username' => 'ຊື່ຜູ້ໃຊ້ເປັນພີ່ນ້ອງກັນ',
    'Protocol' => 'ພິທີການ',
    'No Domain' => 'ບໍ່ມີໂດເມນ',
    'Field type cannot empty!' => 'ປະເພດຊ່ອງຂໍ້ມູນບໍ່ສາມາດຫວ່າງໄດ້!',
    'Field domain cannot empty!' => 'ໂດເມນພາກສະຫນາມບໍ່ສາມາດຫວ່າງເປົ່າໄດ້!',
    'Address cannot be empty' => 'ທີ່ຢູ່ບໍ່ສາມາດຫວ່າງເປົ່າໄດ້',
    'Wallet' => 'ກະເປົາເງິນ',
    'Verification Code' => 'ລະຫັດຢືນຢັນ',
    'Get Code' => 'ຮັບເອົາລະຫັດ',
    'Please wait for 3 minutes to request again.' => 'ກະລຸນາລໍຖ້າ 3 ນາທີເພື່ອຮ້ອງຂໍອີກເທື່ອຫນຶ່ງ.',
    'Phone number has been used' => 'ເບີໂທລະສັບຖືກໃຊ້ແລ້ວ',
    'Verify code has been expired' => 'ຢືນຢັນລະຫັດໝົດອາຍຸແລ້ວ',
    'Register' => 'ລົງທະບຽນ',
    'Bank info has been blacklisted' => 'ຂໍ້ມູນທະນາຄານໄດ້ຖືກບັນຊີດໍາ',
    'Field phone number cannot empty!' => 'ເບີໂທລະສັບຊ່ອງຂໍ້ມູນບໍ່ສາມາດຫວ່າງເປົ່າໄດ້',
    'PLEASE SELECT' => 'ກະລຸນາເລືອກ',
];