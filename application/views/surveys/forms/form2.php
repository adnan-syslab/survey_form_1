<div class="body">
  <header id="header" class="header-effect-shrink border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-0">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo"> <a href="demo-finance.html"> <img alt="Porto Finance" width="50" src="https://surveyblitz-fql4jh2d7-surveyblitz-app.vercel.app/_next/image?url=https%3A%2F%2Faqylnrlgyrwkkhrdghyz.supabase.co%2Fstorage%2Fv1%2Fobject%2Fsign%2Fsurveyblitz-testing%2Fa46c502f-3fd4-4ab0-b097-715f50b56865%2Fde-DE%2Feni.png%3Ftoken%3DeyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJzdXJ2ZXlibGl0ei10ZXN0aW5nL2E0NmM1MDJmLTNmZDQtNGFiMC1iMDk3LTcxNWY1MGI1Njg2NS9kZS1ERS9lbmkucG5nIiwiaWF0IjoxNjUxMjY1NzkxLCJleHAiOjE5NjY2MjU3OTF9.MkOTgn16ot3CCixVn6RuLnNYxkxRdhqzZRtGDU1p1iY&w=3840&q=75"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <form id="form1" method="POST">
    <div role="main" class="main py-5">
      <div class="container" id="part-one">
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">11</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">What is your start-ups stage?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input"  <?= $data->your_startups_stage == 'Idea' ? 'checked' : '' ?> type="radio" value="Idea" name="your_startups_stage" />
                <label class="form-check-label">Idea</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" <?= $data->your_startups_stage == 'Prototype' ? 'checked' : '' ?> type="radio" value="Prototype" name="your_startups_stage" />
                <label class="form-check-label">Prototype</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" <?= $data->your_startups_stage == 'Start-up' ? 'checked' : '' ?> type="radio" value="Start-up" name="your_startups_stage" />
                <label class="form-check-label">Start-up</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" <?= $data->your_startups_stage == 'Early Growth' ? 'checked' : '' ?> type="radio" value="Early Growth" name="your_startups_stage" />
                <label class="form-check-label">Early Growth</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input"  <?= $data->your_startups_stage == 'Expansion' ? 'checked' : '' ?> type="radio" value="Expansion" name="your_startups_stage" />
                <label class="form-check-label">Expansion</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" <?= $data->your_startups_stage == 'Maturity' ? 'checked' : '' ?> type="radio" value="Maturity" name="your_startups_stage" />
                <label class="form-check-label">Maturity</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">12</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year did your team start working on your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">13</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year have you founded your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">14</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year have you registered your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">15</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">To which main sector does your start-up belongs to?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Advertising/ Design Marketing </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Architecture/ Engineering</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Construction</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Consulting (Law, Tax, Management, HR)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Education and Training</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Financial services</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Human health and social work activities</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Information technology (IT) and communication (incl. software and IT services)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Manufacturing</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Tourism and leisure</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Trade (Retail/ whole sale)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Other services  (z.B. Transport)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio2" />
                <label class="form-check-label">Other</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">16</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many (co-)founders are currently in your venture?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">17</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many people are working in your venture in total?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">18</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Does your team receive consulting, mentoring or coaching? </h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio3" />
                <label class="form-check-label">Consulting</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio3" />
                <label class="form-check-label">Coaching</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio3" />
                <label class="form-check-label">Mentoring</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio3" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">19</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Do you have ties to industy partners?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio4" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio4" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">20</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Are you sourced from single or multiple funding?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio5" />
                <label class="form-check-label">Single funding</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio5" />
                <label class="form-check-label">Multiple funding</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio5" />
                <label class="form-check-label">No funding</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">21</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has your team been granted public funds?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio6" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio6" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">22</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How long did it take your start-up to receive first investments (excluding governmental support funding e.g. EXIST)?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio7" />
                <label class="form-check-label">1-6 months</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio7" />
                <label class="form-check-label">7-12 months</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio7" />
                <label class="form-check-label">13-24 months</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio7" />
                <label class="form-check-label">25-36 months</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio7" />
                <label class="form-check-label">37+ months</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">23</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has an investor invested in your start-up so far (excludes public funding)?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio8" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio8" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">24</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many investors currently invest in your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">25</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How much is your share of personal equity (optional)?</h6>
            <div class="options pt-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">%</div>
                </div>
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">26</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many months passed until your first sale?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">27</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has an investor invested in your start-up so far (excludes public funding)?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio9" />
                <label class="form-check-label">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio9" />
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio9" />
                <label class="form-check-label">&gt; 3</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
      </div>
    </div>
    <section class="fixed-bottom position-fixed w-100 bg-white shadow p-4 border">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div> <a href="<?= base_url('survey/form1') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 2 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>