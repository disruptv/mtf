'use strict';

import logger from 'logger';
import mongoose from 'mongoose';

/**
 * @swagger
 *
 * components:
 *  schemas:
 *   Project:
 *    type: object
 *    required:
 *    - name
 *    properties:
 *      name:
 *        type: string
 */
const projectSchema = new mongoose.Schema({
  name: {
    type: String,
    default: 'Project',
  },
  meta: {
    date_created: String,
    date_modified: String,
  }
});

export default mongoose.model('Project', projectSchema);