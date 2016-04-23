<?php

    namespace SupTrainCommander;

    class Form{

        /**
         * Function init()
         * @param $method
         * @param $action
         * @param $enctype
         * @return string
         */
        public static function init($method, $action, $enctype) {
            if ($enctype == "") {
                return '<form method="'.$method.'" action="'.$action.'">';
            } else {
                return '<form method="'.$method.'" action="'.$action.'" enctype="'.$enctype.'">';
            }
        }

        /**
         * Function inputText()
         * @param $label
         * @param $nameId
         * @param $placeholder
         * @param $value
         * @param $required
         * @param $class
         * @return string
         */
        public static function inputText($label, $nameId, $placeholder, $value, $required, $class) {

            $inputText = '<label for="'.$nameId.'">'.$label;
            $inputText .= '<input ';
            if ($class != "") { $inputText .= 'class="'.$class.'" '; }
            $inputText .= 'type="text" name="'.$nameId.'" id="'.$nameId.'" ';
            if ($placeholder != "") { $inputText .= 'placeholder="'.$placeholder.'" '; }
            if ($value != "") { $inputText .= 'value="'.$value.'" '; }
            if ($required != "") { $inputText .= 'required'; }
            $inputText .= '>';
            $inputText .= '</label>';

            return $inputText;

        }

        /**
         * Function inputemail()
         * @param $label
         * @param $nameId
         * @param $placeholder
         * @param $value
         * @param $required
         * @param $class
         * @return string
         */
        public static function inputEmail($label, $nameId, $placeholder, $value, $required, $class) {

            $inputEmail = '<label for="'.$nameId.'">'.$label;
            $inputEmail .= '</label>';
            $inputEmail .= '<input ';
            if ($class != "") { $inputEmail .= 'class="'.$class.'" '; }
            $inputEmail .= 'type="email" name="'.$nameId.'" id="'.$nameId.'" ';
            if ($placeholder != "") { $inputEmail .= 'placeholder="'.$placeholder.'" '; }
            if ($value != "") { $inputEmail .= 'value="'.$value.'" '; }
            if ($required != "") { $inputEmail .= 'required'; }
            $inputEmail .= '>';

            return $inputEmail;
        }

        /**
         * Function inputPassword()
         * @param $label
         * @param $nameId
         * @param $placeholder
         * @param $value
         * @param $required
         * @param $class
         * @return string
         */
        public static function inputPassword($label, $nameId, $placeholder, $value, $required, $class) {

            $inputPassword = '<label for="'.$nameId.'">'.$label.'</label>';
            $inputPassword .= '<input ';
            if ($class != "") { $inputPassword .= 'class="'.$class.'" '; }
            $inputPassword .= 'type="password" name="'.$nameId.'" id="'.$nameId.'" ';
            if ($placeholder != "") { $inputPassword .= 'placeholder="'.$placeholder.'" '; }
            if ($value != "") { $inputPassword .= 'value="'.$value.'"'; }
            if ($required != "") { $inputPassword .= 'required'; }
            $inputPassword .= '>';

            return $inputPassword;
        }

        /**
         * Function inputUrl()
         * @param $label
         * @param $nameId
         * @param $placeholder
         * @param $value
         * @param $required
         * @param $class
         * @return string
         */
        public static function inputUrl($label, $nameId, $placeholder, $value, $required, $class) {

            $inputUrl = '<label for="'.$nameId.'">'.$label.'</label>';
            $inputUrl .= '<input ';
            if ($class != "") { $inputUrl .= 'class="'.$class.'" '; }
            $inputUrl .= 'type="url" name="'.$nameId.'" id="'.$nameId.'" ';
            if ($placeholder != "") { $inputUrl .= 'placeholder="'.$placeholder.'" '; }
            if ($value != "") { $inputUrl .= 'value="'.$value.'" '; }
            if ($required != "") { $inputUrl .= 'required'; }
            $inputUrl .= '>';

            return $inputUrl;

        }

        /**
         * Function inputImg()
         * @param $label
         * @param $nameId
         * @param $required
         * @return string
         */
        public static function inputImg($label, $nameId, $required) {
            if ($required == "") {
                $inputText = '<label for="'.$nameId.'">'.$label.'</label>';
                $inputText .= '<input type="file" name="'.$nameId.'" id="'.$nameId.'">';
                return $inputText;
            } else {
                $inputText = '<label for="'.$nameId.'">'.$label.'</label>';
                $inputText .= '<input type="file" name="'.$nameId.'" id="'.$nameId.'" required />';
                return $inputText;
            }
        }

        /**
         * Function inputHidden()
         * @param $nameId
         * @param $value
         * @return string
         */
        public static function inputHidden($nameId, $value) {
            return '<input type="hidden" name="'.$nameId.'" id="'.$nameId.'" value="'.$value.'">';
        }

        /**
         * Function textarea()
         * @param $label
         * @param $nameId
         * @param $placeholder
         * @param $value
         * @param $required
         * @param $class
         * @return string
         */
        public static function textarea($label, $nameId, $placeholder, $value, $required, $class) {

            $textarea = '<label for="'.$nameId.'">'.$label.'</label>';
            $textarea .= '<textarea ';
            if ($class != "") { $textarea .= 'class="'.$class.'" '; }
            $textarea .= 'name="'.$nameId.'" id="'.$nameId.'" ';
            if ($placeholder != "") { $textarea .= 'placeholder="'.$placeholder.'" '; }
            if ($required != "") { $textarea .= 'required'; }
            $textarea .= '>';
            if ($value != "") { $textarea .= $value; }
            $textarea .= '</textarea>';

            return $textarea;

        }

        /**
         * Function select()
         * @param $label
         * @param $nameId
         * @param $options
         * @return string
         */
        public static function select($label, $nameId, $options) {
            $select = '<label for="'.$nameId.'">'.$label.'</label>';
            $select .= '<select name="'.$nameId.'" id="'.$nameId.'">';

            $countOptions = count($options);
            for ($i = 0; $i < $countOptions; $i++) {
                $select .= '<option value="'.$options[$i].'">'.$options[$i].'</option>';
            }

            $select .= '</select>';
            return $select;
        }

        /**
         * Function radio()
         * @param $label
         * @param $nameRadio
         * @param $value
         * @param $id
         * @return string
         */
        public static function radio($label, $nameRadio, $value, $id) {
            $checkboxes = '<fieldset>';
            $checkboxes .= '<legend>'.$label.'</legend>';

            $countValue = count($value);
            for ($i = 0; $i < $countValue; $i++) {
                $checkboxes .= '<input type="radio" name="'.$nameRadio.'" value="'.$value[$i].'" id="'.$id[$i].'"><label for="'.$id[$i].'">'.$value[$i].'</label>';
            }

            $checkboxes .= '</fieldset>';
            return $checkboxes;
        }

        /**
         * Function checkboxes()
         * @param $label
         * @param $nameCheckboxes
         * @param $value
         * @return string
         */
        public static function checkboxes($label, $nameCheckboxes, $value) {
            $checkboxes = '<fieldset>';
            $checkboxes .= '<legend>'.$label.'</legend>';

            $countValue = count($value);
            for ($i = 0; $i < $countValue; $i++) {
                $checkboxes .= '<input id="'.$nameCheckboxes[$i].'" type="checkbox" value="'.$value[$i].'"><label for="'.$nameCheckboxes[$i].'">'.$value[$i].'</label>';
            }

            $checkboxes .= '</fieldset>';
            return $checkboxes;
        }

        /**
         * Function checkboxesSingle()
         * @param $name
         * @param $value
         * @return string
         */
        public static function checkboxesSingle($name, $value) {
            $checkboxes = '<input name="'.$name.'" id="'.$name.'" type="checkbox" value="'.$value.'"><label for="'.$name.'">'.$value.'</label>';
            return $checkboxes;
        }

        /**
         * Function submit()
         * @param $nameId
         * @param $value
         * @return string
         */
        public static function submit($nameId, $value) {
            return '<input type="submit" name="'.$nameId.'" id="'.$nameId.'" value="'.$value.'" class="button success small-12 medium-6 large-6" />';
        }

        /**
         * Function reset()
         * @param $nameId
         * @param $value
         * @return string
         */
        public static function reset($nameId, $value) {
            return '<input type="reset" name="'.$nameId.'" id="'.$nameId.'" value="'.$value.'" class="button alert small-12 medium-6 large-6" />';
        }

        /**
         * Function close()
         * @return string
         */
        public static function close() {
            return "</form>";
        }

    }