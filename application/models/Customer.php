<?php

require_once 'Ext/EnCode.php';

class Model_Customer extends Zend_Db_Table
{
    protected $_name = 'customers';
    protected $_primary = 'id';

    protected $_filter = null;
    protected $_validate = null;
    protected $_option = null;


    public function init()
    {
        $this->_filter = array(
            'id' => array('Int'),
        );

        $this->_validate = array(
            'first_name' => array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(
                    array(
                        'min' => 2,
                        'max' => 50
                    )
                ),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập họ !!!'
                    ),
                    array(
                        Zend_Validate_StringLength::TOO_LONG => '* Họ có tối đa 50 kí tự !!!',
                        Zend_Validate_StringLength::TOO_SHORT => '* Họ có phải tối thiểu 2 kí tự !!!'
                    )
                )
            ),

            'last_name' => array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(
                    array(
                        'min' => 2,
                        'max' => 50
                    )
                ),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập tên !!!'
                    ),
                    array(
                        Zend_Validate_StringLength::TOO_LONG => '* Tên có tối đa 50 kí tự !!!',
                        Zend_Validate_StringLength::TOO_SHORT => '* Tên có phải tối thiểu 2 kí tự !!!'
                    )
                )
            ),

            'email' => array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_EmailAddress(),
                /*new Zend_Validate_Db_NoRecordExists(
                    array(
                        'table' => 'customers',
                        'field' => 'email'
                    )
                ),*/
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập email !!!'
                    ),
                    array(
                        Zend_Validate_EmailAddress::INVALID => '* Không nhận dạng được email !!!!',
                        Zend_Validate_EmailAddress::INVALID_FORMAT => '* Sai định dạng email !!!!',
                    ),
                    /* array(
                        Zend_Validate_Db_NoRecordExists::ERROR_RECORD_FOUND => '* Email đã được đăng ký !!!!'
                    )*/
                )
            ),

            'phone' => array(
                new Zend_Validate_Digits,
                new Zend_Validate_NotEmpty(),
                /*new Zend_Validate_Db_NoRecordExists(
                    array(
                        'table' => 'customers',
                        'field' => 'phone'
                    )
                ),*/
                new Zend_Validate_StringLength(
                    array(
                        'min' => 10,
                        'max' => 11
                    )
                ),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_Digits::NOT_DIGITS => '* Số điện thoại không đúng định dạng !!!'
                    ),
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập số điện thoại !!!'
                    ),
                    /*array(
                        Zend_Validate_Db_NoRecordExists::ERROR_RECORD_FOUND => '* Số điện thoại đã được đăng ký !!!!'
                    ),*/
                    array(
                        Zend_Validate_StringLength::TOO_LONG => '* Số điện thoại có tối đa 11 kí tự !!!',
                        Zend_Validate_StringLength::TOO_SHORT => '* Số điện thoại có tối thiểu 10 kí tự !!!'
                    )

                )
            ),

            'password' => array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_StringLength(
                    array(
                        'min' => 5,
                        'max' => 20
                    )
                ),
                new Zend_Validate_Regex('/^[a-zA-Z0-9_!@#$&*\/]+$/'),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập mật khẩu !!!'
                    ),
                    array(
                        Zend_Validate_StringLength::TOO_LONG => '* Mật khẩu chỉ được có tối đa 20 kí tự !!!!',
                        Zend_Validate_StringLength::TOO_SHORT => '* Mật khẩu phải có ít nhất 5 kí tự !!!!'
                    ),
                    array(
                        Zend_Validate_Regex::NOT_MATCH => '* Mật khẩu chỉ bao gồm chữ không dấu, số và các kí tự: @, #, $, &, !, _ , /, \ !!!!'
                    )
                )
            ),

            'country_code' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng  nhập mã vùng !!!'
                    )
                )
            ),
            'city_code' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng chọn thành phố  !!!'
                    )
                )
            ),
            'district_code' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '*  Vui lòng chọn quận  !!!'
                    )
                )
            ),
            'ward_code' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng chọn phường !!!'
                    )
                )
            ),
            'address' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng nhập địa chỉ  !!!'
                    )
                )
            ),

            'city_name' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng chọn thành phố  !!!'
                    )
                )
            ),
            'district_name' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng chọn quận !!!'
                    )
                )
            ),
            'ward_name' => array(
                new Zend_Validate_NotEmpty(),
                Zend_Filter_Input::MESSAGES => array(
                    array(
                        Zend_Validate_NotEmpty::IS_EMPTY => '* Vui lòng chọn phường !!!'
                    )
                )
            )

        );
    }


    public function logIn($arrParam)
    {
        $input = new Zend_Filter_Input($this->_filter, $this->_validate, $arrParam, $this->_option);

        if ($input->isValid()) {
            $result_login = null;
            $encode = new Ext_Encode();
            $arrParam['password'] = $encode->encode_md5($arrParam['password']);
            $where = "email = '" . $arrParam['email'] . "' AND password ='" . $arrParam['password'] . "'";
            $customer = $this->fetchRow($where);
            if (!empty($customer)) {
                $result_login['customer_id'] = $customer['id'];
                $result_login['first_name'] = $customer['first_name'];
                $result_login['last_name'] = $customer['last_name'];
            } else {
                $result_login = false;
            }
        } else {
            if ($input->hasInvalid() || $input->hasMissing()) {
                $messages = $input->getMessages();
                $result_login = $messages;
            }
        }
        return $result_login;
    }

    public function getListItem()
    {
        $list_result = $this->fetchAll()->toArray();
        return $list_result;
    }

    public function checkCustomerExist($arrParam)
    {
        $input = new Zend_Filter_Input($this->_filter, $this->_validate, $arrParam, $this->_option);
        $check_result = null;
        if ($input->isValid()) {
            try {
                $where = " email =  '" . $arrParam['email'] . "' AND phone = '" . $arrParam['phone'] . "'";
                $row = $this->fetchRow($where);
                $check_result['id_exist'] = $row['id'];
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
        } else {
            if ($input->hasInvalid() || $input->hasMissing()) {
                $messages = $input->getMessages();
                $check_result['error_input'] = $messages;
            }
        }
        return $check_result;
    }


    public function registerUser($arrParam)
    {
        try {
            $input = new Zend_Filter_Input($this->_filter, $this->_validate, $arrParam, $this->_option);
            $result = null;
            if ($input->isValid()) {
                $encode = new Ext_Encode();
                $arrParam['password'] = $encode->encode_md5($arrParam['password']);
                $row = $this->createRow($arrParam);
                $row->save();

                $tmp['customer_id'] = $row['id'];
                $tmp['first_name'] = $row['first_name'];
                $tmp['last_name'] = $row['last_name'];

                $result['status'] = true;
                $result['customer'] = $tmp;
            } else {
                if ($input->hasInvalid() || $input->hasMissing()) {
                    $messages = $input->getMessages();
                    $result = $messages;
                }
            }
            return $result;
        } catch (Exception $e) {
            //var_dump($e->getMessage());
        }
    }

    public function getCustomer($customer_id)
    {
        $where = "id = " . $customer_id;
        $result = $this->fetchRow($where);
        unset($result['password']);
        return $result;
    }

    public function updateItem($arrParam)
    {
        try {
            $input = new Zend_Filter_Input($this->_filter, $this->_validate, $arrParam, $this->_option);
            $result = null;
            if ($input->isValid()) {
                $where = " id = " . $arrParam['customer_id'];
                $customer = $this->fetchRow($where);
                if (!empty($arrParam['password'])) {
                    $encode = new Ext_Encode();
                    $arrParam['password'] = $encode->encode_md5($arrParam['password']);
                }
                foreach ($customer as $key => $value) {
                    if (isset($arrParam[$key])) {
                        $customer->$key = $arrParam[$key];
                    }
                }
                $customer->update_date = date('Y-m-d H:i:s');
                $customer->save();
                $tmp['customer_id'] = $customer['id'];
                $tmp['first_name'] = $customer['first_name'];
                $tmp['last_name'] = $customer['last_name'];

                $result['status'] = true;
                $result['customer'] = $tmp;
            } else {
                if ($input->hasInvalid() || $input->hasMissing()) {
                    $messages = $input->getMessages();
                    $result = $messages;
                }
            }
            return $result;
        } catch (Exception $e) {
            //var_dump($e->getMessage());
        }
    }

    public function updatePassword($arrParam)
    {
        try {
            $input = new Zend_Filter_Input($this->_filter, $this->_validate, $arrParam, $this->_option);
            $result = null;
            if ($input->isValid()) {
                $where = " id = " . $arrParam['customer_id'];
                $customer = $this->fetchRow($where);
                if ((!empty($arrParam['password'])) &&(!empty($arrParam['new_password'])) ) {
                    $encode = new Ext_Encode();
                    $arrParam['password'] = $encode->encode_md5($arrParam['password']);
                    if ($arrParam['password'] === $customer->password) {
                        $customer->password = $encode->encode_md5($arrParam['new_password']);
                        $customer->update_date = date('Y-m-d H:i:s');
                        $customer->save();
                        $tmp['customer_id'] = $customer['id'];
                        $tmp['first_name'] = $customer['first_name'];
                        $tmp['last_name'] = $customer['last_name'];

                        $result['status'] = true;
                        $result['customer'] = $tmp;
                    } else {
                        $result['status'] = false;
                        $result['message_pw_not_match'] = "* Mật khẩu không đúng !!!!";
                    }
                }
            } else {
                if ($input->hasInvalid() || $input->hasMissing()) {
                    $messages = $input->getMessages();
                    $result = $messages;
                }
            }
            return $result;
        } catch (Exception $e) {
            //var_dump($e->getMessage());
        }
    }
}
