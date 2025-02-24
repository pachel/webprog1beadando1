
      <h3>Bejlentkezés</h3>
      <form action = "?oldal=belep" method = "post">
          <div class="row mb-3">
              <div class="col-md">
                  <label for="felhasznalo" class="form-label">Felhasználónév</label>
                  <input type="text" class="form-control" id="felhasznalo" placeholder="Felhasználónév" name="felhasznalo" required>
              </div>
              <div class="col-md">
                  <label for="jelszo" class="form-label">Jelszó</label>
                  <input type="password" class="form-control" id="jelszo" placeholder="Jelszó" name="jelszo" required>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <button type="submit" class="form-control btn btn-warning" name="belepes">Bejlentkezek</button>
              </div>
          </div>
      </form>
      <br>&nbsp;<br>
    <h2>Regisztrálja magát, ha még nem felhasználó!</h2>
        <h3>Regisztráció</h3>
        <form action = "?oldal=regisztral" method = "post">
            <div class="row mb-3">
                <div class="col-md">
                    <label for="vezeteknev" class="form-label">Vezetéknév</label>
                    <input type="text" class="form-control" id="vezeteknev" placeholder="Vezetéknév" name="vezeteknev" required>
                </div>
                <div class="col-md">
                    <label for="utonev" class="form-label">Utónév</label>
                    <input type="text" class="form-control" id="utonev" placeholder="Utónév" name="utonev" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md">
                    <label for="felhasznalo" class="form-label">Felhasználónév</label>
                    <input type="text" class="form-control" id="felhasznalo" placeholder="Felhasználónév" name="felhasznalo" required>
                </div>
                <div class="col-md">
                    <label for="jelszo" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="jelszo" placeholder="Jelszó" name="jelszo" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="form-control btn btn-success">Regisztrálok</button>
                </div>
            </div>
        </form>
