<?php
include 'dry.php';

$lang1 = [
    'center_record_forex' => 'ບັນທຶກລາຍງານ',
    'center_statements_mg' => 'ບັນທຶກລາຍງານ',
    'center_statements_forex' => 'ບັນທຶກລາຍງານ',
    'livenumber_result' => 'ຜົນຂອງຕົວເລກສົດ',
    'Recreation center' => 'ສູນພັກຜ່ອນ',
    'center-transfer' => 'ໂອນ-ສູນ',
    'transfer_list' => 'ລາຍການໂອນ',
    'login' => 'ເຂົ້າລະບົບ',
    'signup' => 'ລົງຊື່ເຂົ້າຮ່ວມ',
    'lott_lobby' => 'ຫ້ອງພັກ ຫວຍ ',
    'sport_lobby' => 'ກິລາ-ຫ້ອງພັກ',
    'keno_lobby' => 'ຫ້ອງພັກ ຄີໂນ',
    'number_lobby' => 'ຫ້ອງພັກ ກຶມມຸ',
    'lott_list' => 'ລາຍການຫວຍ',
    'center' => 'ສູນສະມາຊິກ',
    'promotion' => $promotion,
    'keno_game' => 'ຫ້ອງພັກຄີໂນ',
    'keno_china' => 'ຄີໂນ ຈີນ',
    'keno_cambodia' => 'ຄີໂນ ກຳປູເຈຍ',
    'keno_hongkong' => 'ຄີໂນ ຮົງກົງ',
    'keno_jakarta' => 'ຄີໂນ ຈາກາຕາ',
    'keno_japan' => 'ຄີໂນ ຍີ່ປຸ່ນ',
    'keno_korea' => 'ຄີໂນ ເກົາຫຼີ',
    'keno_kuala_lumpur' => 'ຄີໂນ ກົວລາລຳເປີ',
    'keno_macau' => 'ຄີໂນ ມາເກົ້າ',
    'keno_singapore' => 'ຄີໂນ ສິງກະໂປ',
    'keno_taipei' => 'ຄີໂນ ໄທເປ',
    'keno_thailand' => 'ຄີໂນ ປະເທດໄທ',
    'keno_vietnam' => 'ຄີໂນ ປະເທດຫວຽດນາມ',
    'indo_lotto' => 'ຫວຍອິນໂດ',
    'autonumber_game' => 'ຫ້ອງພັກຕົວເລກອັດຕະໂນມັດ',
    'autonumber_result' => 'ຜົນຕົວເລກອັດຕະໂນມັດ',
    'auto12_Balls' => '12 ບານ ອັດຕະໂນມັດ',
    'auto18_Balls' => '18 ບານ ອັດຕະໂນມັດ',
    'auto24_Balls' => '24 ບານ ອັດຕະໂນມັດ',
    'auto30_Balls' => '30 ບານ ອັດຕະໂນມັດບານ ອັດຕະໂນມັດ',
    'auto36_Balls' => '36 ບານ ອັດຕະໂນມັດ',
    'auto42_Balls' => '42 ບານ ອັດຕະໂນມັດ',
    'live_number' => 'ຕົວເລກສົດ',
    'live_12_Balls' => '12 ບານ ສົດ',
    'live_36_Balls' => '36 ບານ ສົດ',
    'live_42_Balls' => '42 ບານ ສົດ',
    'live_48_Balls' => '48 ບານ ສົດ',
    'Multiple_36Balls' => '36 ບານ ຫຼາຍຢ່າງ',
    'Sicbo_Balls' => 'ບານ ຊິກໂບ',
    'Roulette_Balls' => 'ບານ ຣຸເລັດ',
    'lott_4d' => 'ຫວຍ 4ດີ',
    'lott_bsoe' => 'ຫວຍ ບີເອັດສໂອອີ',
    'lott_shio' => 'ຫວຍ ເອັດເຮັດໄອໂອ',
    'lott_colok' => 'ຫວຍ ຊີໂອເອລໂອເຄ',
    'lott_multiple' => 'ຫວຍ ຫຼາຍຢ່າງ',
    'lott_special' => 'ຫວຍ ພິເສດ',
    'lott_result' => 'ຜົນຫວຍ',
    'lott_time' => 'ເວລາຫວຍ',
    'center_info' => 'ຂໍ້ມູນພື້ນຖານ',
    'center_pass' => 'ປ່ຽນລະຫັດຜ່ານ',
    'center_deposit' => 'ຝາກເງິນວາງມັດຈຳ',
    'center_deposit_list' => 'ລາຍການຝາກເງິນວາງມັດຈຳ',
    'center_withdrawal' => 'ຖອນອອກ',
    'center_withdrawal_list' => 'ລາຍການຖອນອອກ',
    'center_record' => 'ບັນທຶກການພະນັນ',
    'center_statements' => 'ບັນທຶກລາຍງານ',
    'center_statements_w88' => 'ບັນທຶກລາຍງານ',
    'center_bonus' => 'ລາງວັນ',
    'center_bonus_list' => 'ລາຍການລາງວັນ',
    'center_update_bonus' => 'ອັບເດດລາງວັນ',
    'center_apply_bonus_list' => 'ຂໍລາຍການລາງວັນ',
    'member_ref' => 'ລາຍການອ້າງອີງ',
    'register' => 'ລົງທະບຽນ',
    'slots' => 'ຊາລັອດ',
    'sports' => 'ກິລາ',
    'forex' => 'ຟໍເຣັກ',
    'casino' => $casino,
    'casino_lobby' => 'ຫ້ອງພັກ ຄາສິໂນ',
    'casino_gold' => 'ຄາສິໂນ 2',
    'th_lott_list' => 'ປະເທດໄທ',
    'th_lott_1d' => 'ຫວຍ ໄທ 1ດີ',
    'th_lott_2d' => 'ຫວຍ ໄທ 2ດີ',
    'th_lott_3d' => 'ຫວຍ ໄທ 3ດີ',
    'th_lott_bigsmall' => 'ຫວຍ ໄທ ໃຫຍ່ນ້ອຍ',
    'th_lott_fast' => 'ຫວຍໄທ ໄວ',
    'vn_lott_list' => 'ລາຍການຫວຍຫວຽດນາມ',
    'vn_lott_2d' => 'ຫວຍຫວຽດນາມ 2ດີ3ດີ',
    'vn_lott_multiple' => 'ຫວຍຫວຽດນາມ ຫຼາຍຢ່າງ',
    'vn_lott_cross' => 'ຫວຍຫວຽດນາມ ກາກະບາດ',
    'vn_lott_bsoe' => 'ຫວຍຫວຽດນາມ ລວມ',
    'vn_lott_results' => 'ຜົນຫວຍຫວຽດນາມ',
    'vn_lott_time' => 'ເວລາຫວຍຫວຽດນາມ',
    'Forgot password' => 'ລືມລະຫັດຜ່ານ',
    'HC Lottery' => 'ຫວຍເຮັດຊີ',
    'lottery_4d_malay' => 'ຫວຍ 4ດີ',
    'Prediction' => 'ການຄາດຄະເນ',
];