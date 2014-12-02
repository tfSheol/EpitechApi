<?php

namespace api\Epitech\classes;

/**
 * Description of I_Infos
 *
 * @author Sheol
 */
class I_Infos {
    protected $_id;
    protected $_login;
    protected $_title;
    protected $_email;
    protected $_internalEmail;
    protected $_lastname;
    protected $_firstname;
    protected $_userInfo;
    protected $_referentUsed;
    protected $_picture;
    protected $_pictureFun;
    protected $_emailReferent;
    protected $_passReferent;
    protected $_promo;
    protected $_semester;
    protected $_uid;
    protected $_gid;
    protected $_location;
    protected $_documents;
    protected $_userDocs;
    protected $_shell;
    protected $_netsoul;
    protected $_close;
    protected $_closeReason;
    protected $_ctime;
    protected $_mtime;
    protected $_comment;
    protected $_idPromo;
    protected $_idHistory;
    protected $_courseCode;
    protected $_schoolCode;
    protected $_schoolTitle;
    protected $_oldIdPromo;
    protected $_oldIdLocation;
    protected $_rights;
    protected $_invited;
    protected $_studentYear;
    protected $_admin;
    protected $_decoded;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->firstData($data);
            $this->secondData($data);
        }
    }
    
    private function firstData($data) {
        $this->_id = $data->infos->id;
        $this->_login = $data->infos->login;
        $this->_title = $data->infos->title;
        $this->_email = $data->infos->email;
        $this->_internalEmail = $data->infos->internal_email;
        $this->_lastname = $data->infos->lastname;
        $this->_firstname = $data->infos->firstname;
        $this->_userInfo = $data->infos->userinfo;
        $this->_referentUsed = $data->infos->referent_used;
        $this->_picture = $data->infos->picture;
        $this->_pictureFun = $data->infos->picture_fun;
        $this->_emailReferent = $data->infos->email_referent;
        $this->_passReferent = $data->infos->pass_referent;
        $this->_promo = $data->infos->promo;
        $this->_semester = $data->infos->semester;
        $this->_uid = $data->infos->uid;
        $this->_gid = $data->infos->gid;
        $this->_location = $data->infos->location;
        $this->_documents = $data->infos->documents;
        $this->_userDocs = $data->infos->userdocs;
    }
    
    private function secondData($data) {
        $this->_shell = $data->infos->shell;
        $this->_netsoul = $data->infos->close;
        $this->_close = $data->infos->netsoul;
        $this->_closeReason = $data->infos->close_reason;
        $this->_ctime = $data->infos->ctime;
        $this->_mtime = $data->infos->mtime;
        $this->_comment = $data->infos->comment;
        $this->_idPromo = $data->infos->id_promo;
        $this->_idHistory = $data->infos->id_history;
        $this->_courseCode = $data->infos->course_code;
        $this->_schoolCode = $data->infos->school_code;
        $this->_schoolTitle = $data->infos->school_title;
        $this->_oldIdPromo = $data->infos->old_id_promo;
        $this->_oldIdLocation = $data->infos->old_id_location;
        $this->_rights = $data->infos->rights;
        $this->_invited = $data->infos->invited;
        $this->_studentYear = $data->infos->studentyear;
        $this->_admin = $data->infos->admin;
        $this->_decoded = $data->infos->decoded;
    }
    
    public function convertCity() {
        $parse = explode('/', $this->_location);
        if (isset($parse[1])) {
            $ret = E_Infos::getConst($parse[1]);
        } else {
            $ret = $this->_location;
        }
        return $ret;
    }
}
