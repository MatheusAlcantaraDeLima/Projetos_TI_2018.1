import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Consulta } from 'src/app/model/consulta';


@Injectable({
  providedIn: 'root'
})
export class ConsultaService {// API path
  base_path = 'http://localhost/medcalldb/consulta/';

  constructor(private http: HttpClient) { }

  // Http Options
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  // Handle API errors
  private handleError(error: HttpErrorResponse) {
    if (error.error instanceof ErrorEvent) {
      // Ocorreu um erro no cliente ou na rede.
      console.error('Ocorreu um erro:', error.error.message);
    } else {
      // O back-end retornou um código de resposta sem êxito.
      // O corpo da resposta pode conter pistas sobre o que deu errado.
      console.error(
        `Backend returned code ${error.status}, ` +
        `body was: ${error.error}`);
    }
    // return an observable with a user-facing error message
    return throwError(
      'Something bad happened; please try again later.');
  };

  /** C.R.U.D **/

  /**
   * addConsulta(Consulta) - Método responsável por inserir consultas no banco
   */
  public addConsulta(consulta: Consulta): Observable<Consulta> {
    return this.http
      .post<Consulta>(this.base_path, JSON.stringify(consulta), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectConsultaById(id) - Método responsável por buscar um Consulta pelo id
   */
  public selectConsultaById(id_consulta: number): Observable<Consulta> {
    return this.http
      .get<Consulta>(this.base_path + '?id=' + id_consulta)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectConsultaById(id) - Método responsável por buscar um Consulta pelo id
   */
  public selectConsulta(): Observable<Consulta> {
    return this.http
      .get<Consulta>(this.base_path)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * updateConsulta(Consulta) - Método responsável por atualizar uma consulta
   */
  public updateConsulta(consulta: Consulta): Observable<Consulta> {
    return this.http
      .put<Consulta>(this.base_path + '?id=' + consulta.id_consulta, JSON.stringify(consulta), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * deleteConsulta(id) - Método responsável por excluir um Consulta
   */
  public deleteConsulta(id: number) {
    return this.http
      .delete<Consulta>(this.base_path + '?id=' + id, this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

}