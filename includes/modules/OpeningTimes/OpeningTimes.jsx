// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class OpeningTimes extends Component {

  static slug = 'gary_hello_world';


  render() {
     return (

       <div>
         <div className={this.props.nemo_opening_times_header}>
           <img className={'logo ' + this.props.nemo_logo_use} alt={'logo'} src={this.props.nemo_logo}/>
           <h3>{this.props.nemo_title}</h3>
           <p>{this.props.nemo_content}</p>
         </div>

         {/* Monday */}

         <div className={'day'}>
           Monday: <span class={this.props.nemo_working_monday + ' opening-hours'}>{this.props.nemo_monday_start_hours}:{this.props.nemo_monday_start_minutes} - {this.props.nemo_monday_finish_hours}:{this.props.nemo_monday_finish_minutes}</span>
           <span className={this.props.nemo_working_monday + ' closed'}>CLOSED</span>
         </div>

         {/* Tuesday*/}

         <div className={'day'}>
           Tuesday: <span class={this.props.nemo_working_tuesday + ' opening-hours'}>{this.props.nemo_tuesday_start_hours}:{this.props.nemo_tuesday_start_minutes} - {this.props.nemo_tuesday_finish_hours}:{this.props.nemo_tuesday_finish_minutes}</span>
           <span className={this.props.nemo_working_tuesday + ' closed'}>CLOSED</span>
         </div>

         {/* Wednesday */}

           <div className={'day'}>
           Wednesday: <span class={this.props.nemo_working_wednesday + ' opening-hours'}>{this.props.nemo_wednesday_start_hours}:{this.props.nemo_wednesday_start_minutes} - {this.props.nemo_wednesday_finish_hours}:{this.props.nemo_wednesday_finish_minutes}</span>
           <span className={this.props.nemo_working_wednesday + ' closed'}>CLOSED</span>
         </div>

         {/* Thursday */}

           <div className={'day'}>
           Thursday: <span class={this.props.nemo_working_thursday + ' opening-hours'}>{this.props.nemo_thursday_start_hours}:{this.props.nemo_thursday_start_minutes} - {this.props.nemo_thursday_finish_hours}:{this.props.nemo_thursday_finish_minutes}</span>
           <span className={this.props.nemo_working_thursday + ' closed'}>CLOSED</span>
         </div>

         {/* Friday */}

           <div className={'day'}>
           Friday: <span class={this.props.nemo_working_friday + ' opening-hours'}>{this.props.nemo_friday_start_hours}:{this.props.nemo_friday_start_minutes} - {this.props.nemo_friday_finish_hours}:{this.props.nemo_friday_finish_minutes}</span>
           <span className={this.props.nemo_working_friday + ' closed'}>CLOSED</span>
           </div>

         {/* Saturday */}

           <div className={'day'}>
           Saturday: <span class={this.props.nemo_working_saturday + ' opening-hours'}>{this.props.nemo_saturday_start_hours}:{this.props.nemo_saturday_start_minutes} - {this.props.nemo_saturday_finish_hours}:{this.props.nemo_saturday_finish_minutes}</span>
           <span className={this.props.nemo_working_saturday + ' closed'}>CLOSED</span>
         </div>

         {/* Sunday */}

           <div className={'day'}>
           Sunday: <span class={this.props.nemo_working_sunday + ' opening-hours'}>{this.props.nemo_sunday_start_hours}:{this.props.nemo_sunday_start_minutes} - {this.props.nemo_sunday_finish_hours}:{this.props.nemo_sunday_finish_minutes}</span>
           <span className={this.props.nemo_working_sunday + ' closed'}>CLOSED</span>
           </div>

       </div>
     );
   }

}

export default OpeningTimes;
