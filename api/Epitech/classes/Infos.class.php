<?php

namespace api\Epitech\classes;

/**
 * Description of Infos
 *
 * @author Sheol
 */
class Infos {
    private $_id;
    private $_login;
    private $_title;
    private $_email;
    private $_internalEmail;
    private $_lastname;
    private $_firstname;
    private $_userInfo;
    private $_referentUsed;
    private $_picture;
    private $_pictureFun;
    private $_emailReferent;
    private $_passReferent;
    private $_promo;
    private $_semester;
    private $_uid;
    private $_gid;
    private $_location;
    private $_documents;
    private $_userDocs;
    private $_shell;
    private $_netsoul;
    private $_close;
    private $_closeReason;
    private $_ctime;
    private $_mtime;
    private $_comment;
    private $_idPromo;
    private $_idHistory;
    private $_courseCode;
    private $_schoolCode;
    private $_schoolTitle;
    private $_oldIdPromo;
    private $_oldIdLocation;
    private $_rights;
    private $_invited;
    private $_studentYear;
    private $_admin;
    private $_decoded;
    
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
    
    public function &getId() {
        return $this->_id;
    }
    
    public function &getLogin() {
        return $this->_login;
    }
    
    public function &getName() {
        return $this->_title;
    }
    
    public function &getEmail() {
        return $this->_email;
    }
    
    public function &getInternalEmail() {
        return $this->_internalEmail;
    }
    
    public function &getLastname() {
        return $this->_lastname;
    }
    
    public function &getFirstname() {
        return $this->_firstname;
    }
    
    public function &getUserInfo() {
        return $this->_userInfo;
    }
    
    public function &getReferentUsed() {
        return $this->_referentUsed;
    }
    
    public function &getPicture() {
        return 'https://cdn.local.epitech.eu/userprofil/commentview/'.$this->_picture;
    }
    
    public function &getFunPicture() {
        return 'https://cdn.local.epitech.eu/userprofil/commentview/'.$this->_pictureFun;
    }
    
    public function &getEmailReferent() {
        return $this->_emailReferent;
    }
    
    public function &getPassReferent() {
        return $this->_passReferent;
    }
    
    public function &getPromo() {
        return $this->_promo;
    }
    
    public function &getSemester() {
        return $this->_semester;
    }
    
    public function &getUid() {
        return $this->_uid;
    }
    
    public function &getGid() {
        return $this->_gid;
    }
    
    public function &getCity() {
        return $this->_location;
    }
    
    public function &getDocuments() {
        return $this->_documents;
    }
    
    public function &getUserDocs() {
        return $this->_userDocs;
    }
    
    public function &getShell() {
        return $this->_shell;
    }
    
    public function &getNetsoul() {
        return $this->_netsoul;
    }
    
    public function &getClose() {
        return $this->_close;
    }
    
    public function &getCloseReason() {
        return $this->_closeReason;
    }
    
    public function &getCtime() {
        return $this->_ctime;
    }
    
    public function &getMtime() {
        return $this->_mtime;
    }
    
    public function &getComment() {
        return $this->_comment;
    }
    
    public function &getIdPromo() {
        return $this->_idPromo;
    }
    
    public function &getIdHistory() {
        return $this->_idHistory;
    }
    
    public function &getCourseCode() {
        return $this->_courseCode;
    }
    
    public function &getSchoolCode() {
        return $this->_schoolCode;
    }
    
    public function &getSchoolTitle() {
        return $this->_schoolTitle;
    }
    
    public function &getOldIdPromo() {
        return $this->_oldIdPromo;
    }
    
    public function &getOldIdLocation() {
        return $this->_oldIdLocation;
    }
    
    public function &getRights() {
        return $this->_rights;
    }
    
    public function &getInvited() {
        return $this->_invited;
    }
    
    public function &getStudentYear() {
        return $this->_studentYear;
    }
    
    public function &getAdmin() {
        return $this->_admin;
    }
    
    public function &getDecoded() {
        return $this->_decoded;
    }
}
