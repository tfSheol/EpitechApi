<?php

namespace api\Epitech\classes;

/**
 * Description of Infos
 *
 * @author Sheol
 */
class Infos extends I_Infos {
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
        $link = 'https://cdn.local.epitech.eu/userprofil/commentview/'.$this->_login.'.jpg';
        return $link;
    }
    
    public function &getPictureBmp() {
        return $this->_picture;
    }
    
    public function &getFunPicture() {
        $link = 'https://cdn.local.epitech.eu/userprofil/commentview/'.$this->_login.'.jpg';
        return $link;
    }
    
    public function &getFunPictureBmp() {
        return $this->_pictureFun;
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
    
    public function getCity() {
        return $this->convertCity();
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
