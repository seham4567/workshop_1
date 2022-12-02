<!-- Small modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4>Log Out <i class="fa fa-lock"></i></h4>
        </div>
        <div class="modal-body">
          <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
          <div class="actionsBtns">
              <form action="/logout" method="post">
                  <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                  <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />
                      <button class="btn btn-default" data-dismiss="modal">Cancel</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>